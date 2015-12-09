/**
 * Created by monoless on 2015-12-03.
 */
module.exports = function () {
    var that = this;
    var async = require('async');


    /**
     * 반 학생 수 리셋
     *
     * @param groupModel
     * @param groups
     */
    this.initializeGroups = function (groupModel, groups, maxGroups) {

        async.waterfall([
            function (callback) {
                groupModel.remove({}, function (err, docs) {
                    if (err) {
                        console.log(err);
                        throw new Error('truncate groups failed');
                    }

                    callback(null);
                });
            },
            function (callback) {
                var collections = [];
                var groupCount = 1;
                for (var i in groups) {
                    if (maxGroups < groupCount) {
                        break;
                    }

                    collections.push({
                        name: groups[i],
                        maleCount: 0,
                        femaleCount: 0,
                        totalCount: 0
                    });

                    groupCount++;
                }

                groupModel.collection.insert(collections, function (err) {
                    if (err) {
                        console.log(err);
                        throw new Error('initialize groups failed');
                    } else {
                        console.log('initialize groups success');
                        callback(null);
                    }
                });
            }
        ]);
    };


    /**
     * 서버 현재 상황
     *
     * @param serverModel
     * @param status
     * @param started
     * @returns {*}
     */
    this.createServerFlag = function (serverModel, status, started) {
        var server = new serverModel({
            status: status,
            started: started
        });

        server.save(function (err) {
            if (err) {
                console.log(err);
                throw new Error('create server flag failed');
            }
        });

        return server;
    };


    /**
     * 가입 시도 검사
     *
     * @param userModel
     * @param serverModel
     * @param remoteAddress
     * @param respawnTime
     * @param maxRecruitTime
     * @param maxRecruitMember
     * @param callback
     */
    this.checkSignup = function (userModel, serverModel, remoteAddress, respawnTime, maxRecruitTime,
                                 maxRecruitMember, callback) {
        var resultStatus = 0;   // normal;
        var options = {};

        async.parallel({
            userCountAll: function (cb) {
                userModel.count({}).exec(cb);
            },
            userFindByIp: function (cb) {
                userModel.find({ip: remoteAddress}).exec(cb);
            },
            flag: function (cb) {
                serverModel.findOne({}).exec(cb);
            }
        }, function (err, result) {
            if (err) {
                console.log(err);
                throw new Error('check signup process failed');
            }

            if (!result.flag) {
                result.flag = that.createServerFlag(serverModel, 'start', new Date());
            }

            var timeStamp = Date.now();

            var dateDiff = timeStamp - new Date(result.flag.started).getTime();
            var isExist = false;
            var isDead = false;
            var rebornTime = new Date();

            for (var i = 0; result.userFindByIp.length; i++) {
                var current = result.userFindByIp[i];
                if (0 >= current.health && respawnTime > timeStamp - new Date(current.deathAt).getTime()) {
                    isExist = false;
                    isDead = false;
                } else if (0 >= current.health) {
                    isExist = true;
                    isDead = true;
                    rebornTime = current.deathAt;
                    break;
                } else {
                    isExist = true;
                    break;
                }
            }

            options.rebornTime = rebornTime;

            if ('start' !== result.flag.status || maxRecruitTime < dateDiff) {
                resultStatus = -1;
            } else if (maxRecruitMember <= result.userCountAll) {
                resultStatus = -2;
            } else if (true === isExist && true === isDead) {
                resultStatus = -3;
            } else if (true === isExist) {
                resultStatus = -4;
            }

            callback(null, resultStatus, options);
        });
    };


    /**
     * 가입 POST 후 검사
     *
     * @param userModel
     * @param serverModel
     * @param groupModel
     * @param remoteAddress
     * @param respawnTime
     * @param maxRecruitTime
     * @param maxRecruitMember
     * @param maxGroups
     * @param groupPerMan
     * @param gameIcons
     * @param expressRequest
     * @param formValidation
     * @param callback
     */
    this.validSignup = function (userModel, serverModel, groupModel, remoteAddress, respawnTime, maxRecruitTime,
                                 maxRecruitMember, maxGroups, groupPerMan, gameIcons, expressRequest, formValidation,
                                 callback) {
        async.parallel({
            beforeCheck: function (cb) {
                that.checkSignup(userModel, serverModel, remoteAddress, respawnTime, maxRecruitTime,
                    maxRecruitMember, cb);
            },
            formCheck: function (cb) {
                expressRequest.checkBody(formValidation(expressRequest.body.password));
                var error = expressRequest.validationErrors();
                if (!error) {
                    error = [];
                }

                cb(null, error);
            },
            iconGenderCheck: function (cb) {
                var icon = {};
                var iconLength = gameIcons.length;
                var status = true;
                for (var i = 0; i < iconLength; i++) {
                    icon = gameIcons[i];
                    if (icon.path === expressRequest.body.userIcon) {
                        break;
                    }
                }

                if (0 == expressRequest.body.userGender && 'male' !== icon.gender) {
                    status = false;
                } else if (1 == expressRequest.body.userGender && 'female' !== icon.gender) {
                    status = false;
                }

                cb(null, status);
            },
            groupCount: function (cb) {
                that.validGroupByGender(
                    groupModel,
                    expressRequest.body.userGender,
                    maxGroups,
                    groupPerMan,
                    cb
                );
            }
        }, function (err, result) {
            var resultStatus = 0;   // normal
            var options = {};

            if (0 !== result.beforeCheck[0]) {
                resultStatus = result.beforeCheck[0];
                options = result.beforeCheck[1];
            } else if (0 < result.formCheck.length) {
                resultStatus = -5;
                options = result.formCheck;
            } else if (false === result.iconGenderCheck) {
                resultStatus = -6;
            } else if (true !== result.groupCount[0] && 0 === expressRequest.body.userGender) {
                resultStatus = -7;
            } else if (true !== result.groupCount[0] && 1 === expressRequest.body.userGender) {
                resultStatus = -8;
            }

            options.groupCount = result.groupCount[1].totalCount;
            options.groupName = result.groupCount[1].name;

            callback(null, resultStatus, options);
        });
    };


    /**
     * 가입 / DB 기록
     *
     * @param passport
     * @param userModel
     * @param groupModel
     * @param remoteAddress
     * @param expressRequest
     * @param expressResponse
     * @param attack
     * @param defence
     * @param health
     * @param stamina
     * @param requireExp
     * @param groupName
     * @param studentNo
     * @param clubName
     * @param skillMap
     * @param armorBody
     * @param items
     */
    this.signup = function (passport, userModel, groupModel, remoteAddress, expressRequest, expressResponse, attack,
                            defence, health, stamina, requireExp, groupName, studentNo, clubName, skillMap, armorBody,
                            items) {

        userModel.register(new userModel({
            username: expressRequest.body.username,
            userGender: expressRequest.body.userGender,
            userIcon: expressRequest.body.userIcon,
            message: expressRequest.body.message,
            messageDying: expressRequest.body.messageDying,
            messageComment: expressRequest.body.messageComment,
            ip: remoteAddress,

            // character stats
            attack: attack,
            defence: defence,
            health: health,
            maxHealth: health,
            stamina: stamina,
            killCount: 0,
            level: 1,
            requireExp: requireExp,
            injured: [],
            place: 0,
            status: 0,

            // battle
            prevAttacker: '',
            prevLog: '',
            deathCause: '',
            deathAt: 0,

            // character extends
            groupName: groupName,
            studentNo: studentNo,
            clubName: clubName,
            tactics: 0,

            // skills
            shotSkill: skillMap.shotSkill,
            cutSkill: skillMap.cutSkill,
            throwSkill: skillMap.throwSkill,
            fistSkill: skillMap.fistSkill,
            bowSkill: skillMap.bowSkill,
            meleeSkill: skillMap.meleeSkill,
            bombSkill: skillMap.bombSkill,
            pokeSkill: skillMap.pokeSkill,

            // equip
            weapon: {idx: 'weapon0', point: 0, endurance: 0},
            armor: {
                head: {idx: '', point: 0, endurance: 0},
                body: armorBody,
                arm: {idx: '', point: 0, endurance: 0},
                foot: {idx: '', point: 0, endurance: 0}
            },

            // items
            item0: items.item0,
            item1: items.item1,
            item2: items.item2,
            item3: items.item3,
            item4: items.item4,
            item5: items.item5
        }), expressRequest.body.password, function (err, user) {
            if (err) {
                if (typeof err.message !== 'undefined') {
                    expressRequest.flash('error', err.message);
                } else {
                    expressRequest.flash('error', '데이터 저장 중 에러가 발생하였습니다.');
                }

                expressResponse.redirect('/signup');
            } else {
                groupModel.findOne({name: groupName}, function (err, group) {
                    if (err) {
                        console.log(err);
                    }

                    group.totalCount++;
                    if (0 == expressRequest.body.userGender) {
                        group.maleCount++;
                    } else {
                        group.femaleCount++;
                    }

                    group.save(function (err) {
                        if (err) {
                            console.log(err);
                        }
                    });
                });

                passport.authenticate('local')(expressRequest, expressResponse, function () {
                    expressResponse.redirect('/intro');
                });
            }
        });
    };


    /**
     * 학급 조회해서 남녀 가입유무 판단
     *
     * @param groupModel
     * @param isFemale
     * @param maxGroups
     * @param groupPerMan
     * @param callback
     */
    this.validGroupByGender = function (groupModel, isFemale, maxGroups, groupPerMan, callback) {
        var resultStatus = true;   // normal;

        groupModel.find({}).exec(function (err, groups) {
            if (err) {
                console.log(err);
            } else {
                var groupCount = 1;
                for (var i in groups) {
                    var group = groups[i];

                    if (group.totalCount >= (groupPerMan * 2)
                        && maxGroups >= groupCount) {
                        continue;
                    }

                    if (!isFemale && group.maleCount >= groupPerMan) {
                        resultStatus = false;
                    } else if (isFemale && group.femaleCount >= groupPerMan) {
                        resultStatus = false;
                    } else {
                        break;
                    }

                    groupCount++;
                }

                callback(null, resultStatus, group);
            }
        });
    };
};