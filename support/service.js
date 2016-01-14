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
     * @param maxGroups
     */
    this.initializeGroups = function (groupModel, groups, maxGroups) {
        async.waterfall([
            function (callback) {
                groupModel.remove({}, function (err) {
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
     * 지역정보 리셋
     *
     * @param placeModel
     * @param serverModel
     * @param userModel
     * @param newsModel
     * @param util
     * @param io
     */
    this.initializePlaces = function (placeModel, serverModel, userModel, newsModel, winnerModel, util, io) {
        var places = util.getPlaces();
        var globalLooted = util.getGlobalLooted();

        async.waterfall([
            function (callback) {
                placeModel.remove({}, function (err) {
                    if (err) {
                        console.log(err);
                        throw new Error('truncate places failed');
                    }

                    callback(null);
                });
            },
            function (callback) {
                var collections = [];
                for (var i in places) {
                    var place = places[i];
                    collections.push({
                        idx: i,
                        name: place.name,
                        code: place.code,
                        restrict: place.restrict,
                        restrictReserve: place.restrictReserve,
                        items: typeof place.looted !== 'undefined' ? place.looted : []
                    });
                }

                var maxCollection = collections.length;
                for (var i in globalLooted) {
                    var looted = globalLooted[i];
                    var randomPlace = Math.floor(Math.random() * (maxCollection - 1)) + 1;
                    collections[randomPlace].items.push(looted);
                }

                placeModel.collection.insert(collections, function (err) {
                    if (err) {
                        console.log(err);
                        throw new Error('initialize places failed');
                    } else {
                        console.log('initialize places success');
                        callback(null);
                    }
                });
            },
            function (callback) {
                if (typeof global.restrictTimer !== 'undefined') {
                    clearInterval(global.restrictTimer);
                }

                if (typeof global.killTimer !== 'undefined') {
                    clearInterval(global.killTimer);
                }

                global.restrictTimer = setInterval(
                    that.restrictPlaceEvent.bind(that, serverModel, placeModel, userModel, newsModel, winnerModel, util, io),
                    86400000
                );

                global.killTimer = setInterval(
                    that.restrictKillEvent.bind(that, serverModel, placeModel, userModel, newsModel, winnerModel, util, io),
                    60000
                );

                callback(null);
            }
        ]);
    };


    this.restrictPlaceEvent = function (serverModel, placeModel, userModel, newsModel) {
        async.waterfall([
            function (callback) {
                serverModel.findOne({}, function (err, server) {
                    if (err) {
                        console.log(err);
                        throw new Error('initialize places restrict trigger failed');
                    } else {
                        callback(null, server);
                    }
                });
            },

            function (server, callback) {
                if ('start' === server.status) {
                    placeModel.find({}, function (err, places) {
                        if (err) {
                            console.log(err);
                            throw new Error('initialize places restrict trigger failed');
                        } else {
                            callback(null, server, places);
                        }
                    });
                }
            },

            function (server, places) {
                if (server.restrictIndex < places.length) {
                    server.restrictIndex += 3;
                    server.save();

                    var shutdown = [];
                    var allShutdown = [];
                    var queue = [server.restrictIndex + 1, server.restrictIndex + 2, server.restrictIndex + 3];
                    var reserve = [];

                    for (var i = 0; i < queue.length; i++) {
                        if (typeof places[queue[i]] !== 'undefined') {
                            reserve.push(queue[i]);
                        }
                    }

                    for (var i in places) {
                        var place = places[i];
                        if (true === place.restrictReserve) {
                            place.restrict = true;
                            place.restrictReserve = false;
                            place.save();
                            shutdown.push(parseInt(place.idx.replace('place', '')));
                            allShutdown.push(parseInt(place.idx.replace('place', '')));
                        } else if (-1 !== reserve.indexOf(parseInt(place.idx.replace('place', '')))) {
                            place.restrictReserve = true;
                            place.save();
                        }
                    }

                    if (0 < reserve.length || 0 < shutdown.length) {
                        var news = new newsModel({
                            registerAt: new Date(),
                            type: 'RESTRICT',
                            restrict: shutdown,
                            restrictReserve: reserve
                        });

                        news.save();
                    }
                }
            }
        ]);
    };


    this.restrictKillEvent = function(serverModel, placeModel, userModel, newsModel, winnerModel, util, io) {
        async.waterfall([
            function (callback) {
                serverModel.findOne({}, function (err, server) {
                    if (err) {
                        console.log(err);
                        throw new Error('initialize places restrict trigger failed');
                    } else {
                        callback(null, server);
                    }
                });
            },

            function (server, callback) {
                if (-1 !== ['start', 'hacking'].indexOf(server.status)) {
                    placeModel.find({restrict: true}, function (err, places) {
                        if (err) {
                            console.log(err);
                            throw new Error('initialize places restrict trigger failed');
                        } else {
                            callback(null, server, places);
                        }
                    });
                }
            },

            function (server, places, callback) {
                var shutdowns = [];
                for (var i in places) {
                    var place = places[i];
                    shutdowns.push(parseInt(place.idx.replace('place', '')));
                }

                userModel.find({npc: false, deathAt: null, place: {"$in": shutdowns}}, function (err, users) {
                    if (err) {
                        console.log(err);
                        throw new Error('initialize restrict kill trigger failed');
                    } else {
                        callback(null, server, users, shutdowns);
                    }
                });
            },

            function (server, victims, shutdowns, callback) {
                for (var i in victims) {
                    var user = victims[i];

                    if (Date.now() - new Date(user.joinedAt).getTime() < 600000) {
                        continue;
                    }

                    user.status = 4;
                    user.deathCause = 'restrictArea';
                    user.deathAt = new Date();
                    user.health = 0;
                    user.save();

                    util.deathInfoToVictim(io, user);

                    var news = new newsModel({
                        registerAt: new Date(),
                        type: 'DEATH',
                        message: user.messageDying,
                        murder: {
                            weaponMethod: 'restrictArea'
                        },
                        victim: {
                            username: user.username,
                            userGender: user.userGender,
                            groupName: user.groupName,
                            studentNo: user.studentNo
                        }
                    });

                    news.save();
                }

                callback(null, server, shutdowns);
            },

            function (server, shutdowns, callback) {
                userModel.find({npc: false, deathAt: null, place: {$nin: shutdowns}}, function (err, survivors) {
                    if (err) {
                        console.log(err);
                        throw new Error('initialize restrict kill trigger failed');
                    } else {
                        callback(null, server, survivors);
                    }
                });
            },

            function (server, survivors) {
                var news;
                var survivorCount = survivors.length;
                if ('start' === server.status
                    && true === util.isBattleOver(server.started)) {

                    if (1 == survivorCount) {
                        var user = survivors[0];
                        server.status = 'ending';
                        server.winner = user.username;
                        server.save();

                        news = new newsModel({
                            registerAt: new Date(),
                            type: 'ENDING',
                            message: user.messageDying,
                            murder: {
                                weaponMethod: 'restrictArea'
                            },
                            victim: {
                                username: user.username,
                                userGender: user.userGender,
                                groupName: user.groupName,
                                studentNo: user.studentNo
                            }
                        });

                        news.save();

                        util.setWinner(winnerModel, 'ending', server.started, user);

                        io.in(user.username).emit('recv', {
                            type: 'broadcastEnding',
                            log: '갑자기 사이렌 소리가 귀를 때렸다.',
                            except: ''
                        });
                    } else if (0 == survivorCount) {
                        server.status = 'noWinner';
                        server.save();

                        news = new newsModel({
                            registerAt: new Date(),
                            type: 'NO_WINNER'
                        });

                        news.save();

                        util.setWinner(winnerModel, 'noWinner', server.started);
                    }
                } else if ('hacking' === server.status
                    && 0 == survivorCount) {
                    server.status = 'noWinner';
                    server.save();

                    news = new newsModel({
                        registerAt: new Date(),
                        type: 'NO_WINNER'
                    });

                    news.save();

                    util.setWinner(winnerModel, 'noWinner', server.started);
                }
            }
        ]);
    };


    /**
     * 서버정보 리셋
     *
     * @param serverModel
     */
    this.initializeServerFlag = function (serverModel) {
        async.waterfall([
            function (callback) {
                serverModel.remove({}, function (err) {
                    if (err) {
                        console.log(err);
                        throw new Error('truncate server-flag failed');
                    }

                    callback(null);
                });
            },
            function (callback) {
                var server = new serverModel({
                    status: 'start',
                    started: new Date(),
                    restrictIndex: 0,
                    winner: ''
                });

                server.save(function (err) {
                    if (err) {
                        console.log(err);
                        throw new Error('initialize server-flag failed');
                    } else {
                        console.log('initialize server-flag success');
                        callback(null);
                    }
                });
            }
        ]);
    };


    /**
     * 대회상황 리셋
     *
     * @param newsModel
     */
    this.initializeNews = function (newsModel) {
        async.waterfall([
            function (callback) {
                newsModel.remove({}, function (err) {
                    if (err) {
                        console.log(err);
                        throw new Error('truncate news failed');
                    }

                    callback(null);
                });
            },
            function (callback) {
                var news = new newsModel({
                    registerAt: new Date(),
                    type: 'NEWGAME'
                });

                news.save(function (err) {
                    if (err) {
                        console.log(err);
                        throw new Error('initialize news failed');
                    } else {
                        console.log('initialize news success');
                        callback(null);
                    }
                });
            }
        ]);
    };


    this.initializeUsers = function (userModel, npc) {
        async.waterfall([
            function (callback) {
                userModel.remove({}, function (err) {
                    if (err) {
                        console.log(err);
                        throw new Error('truncate user failed');
                    }

                    callback(null);
                });
            },
            function () {
                for (var i in npc) {
                    var newUser = new userModel(npc[i]);
                    newUser.save();
                }

                console.log('initialize user success');
            }
        ]);
    };


    /**
     * 리셋
     */
    this.initialize = function (groupModel, placeModel, serverModel, newsModel, userModel, winnerModel, util, io) {
        that.initializeGroups(groupModel, util.getGroups(), util.getMaxGroups());
        that.initializeServerFlag(serverModel);
        that.initializePlaces(placeModel, serverModel, userModel, newsModel, winnerModel, util, io);
        that.initializeNews(newsModel);
        that.initializeUsers(userModel, require('./../config/npc'));
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
                userModel.count({npc: false}).exec(cb);
            },
            userFindByIp: function (cb) {
                userModel.find({npc: false, ip: remoteAddress}).exec(cb);
            },
            flag: function (cb) {
                serverModel.findOne({}).exec(cb);
            }
        }, function (err, result) {
            if (err) {
                console.log(err);
                throw new Error('check signup process failed');
            }

            var timeStamp = Date.now();

            var dateDiff = timeStamp - new Date(result.flag.started).getTime();
            var isExist = false;
            var isDead = false;
            var rebornTime = new Date();

            // 테스트를 위해서 중복가입 허용
            /*
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
            */

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
     * @param newsModel
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
     * @param clubId
     * @param clubName
     * @param skillMap
     * @param armorBody
     * @param items
     */
    this.signup
        = function (passport, userModel, groupModel, newsModel, remoteAddress, expressRequest, expressResponse, attack,
                    defence, health, stamina, requireExp, groupName, studentNo, clubId, clubName, skillMap,
                    armorBody, items) {

        userModel.register(new userModel({
            username: expressRequest.body.username,
            userGender: expressRequest.body.userGender,
            userIcon: expressRequest.body.userIcon,
            message: expressRequest.body.message,
            messageDying: expressRequest.body.messageDying,
            messageComment: expressRequest.body.messageComment,
            ip: remoteAddress,
            npc: false,

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
            statusChangedAt: new Date(),
            joinedAt: new Date(),

            // battle
            prevAttacker: '',
            prevLog: '',
            deathCause: '',
            deathType: 0,
            deathAt: null,

            // character extends
            groupName: groupName,
            studentNo: studentNo,
            clubId: clubId,
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
            weapon: {idx: 'weaponDefault', point: 0, endurance: 0},
            armor: {
                head: {idx: '', point: 0, endurance: 0},
                body: armorBody,
                arm: {idx: '', point: 0, endurance: 0},
                foot: {idx: '', point: 0, endurance: 0},
                accessory: {idx: '', point: 0, endurance: 0}
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

                var news = new newsModel({
                    registerAt: new Date(),
                    type: 'ENTRY',
                    victim: {
                        username: expressRequest.body.username,
                        userGender: expressRequest.body.userGender,
                        groupName: groupName,
                        studentNo: studentNo
                    }
                });

                news.save();

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
                callback(err);
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


    /**
     * 계정 정보 리턴
     *
     * @param userModel
     * @param username
     * @param callback
     */
    this.getUserInfo = function (userModel, username, callback) {
        userModel.findOne({username: username}, function (err, user) {
            if (err) {
                console.log(err);
                callback(err);
            } else {
                callback(null, user);
            }
        });
    };


    /**
     * 위치 정보 리턴
     *
     * @param placeModel
     * @param callback
     */
    this.getPlacesInfo = function (placeModel, callback) {
        placeModel.find({}, function (err, places) {
            if (err) {
                console.log(err);
                callback(err);
            } else {
                callback(null, places);
            }
        });
    };


    /**
     * 서버 정보 리턴
     *
     * @param serverModel
     * @param callback
     */
    this.getServerInfo = function (serverModel, callback) {
        serverModel.findOne({}, function (err, server) {
            if (err) {
                console.log(err);
                callback(err);
            } else {
                callback(null, server);
            }
        });
    };


    /**
     * 계정 + 위치
     *
     * @param userModel
     * @param placeModel
     * @param serverModel
     * @param username
     * @param callback
     */
    this.getBasicInfo = function (userModel, placeModel, serverModel, username, callback) {
        async.parallel({
            account: function (cb) {
                that.getUserInfo(userModel, username, cb);
            },
            place: function (cb) {
                that.getPlacesInfo(placeModel, cb);
            },
            server: function (cb) {
                that.getServerInfo(serverModel, cb);
            }
        }, function (err, result) {
            if (err) {
                console.log(err);
                callback(err);
            } else {
                callback(err, result);
            }
        });
    };
};