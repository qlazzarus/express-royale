/**
 * Created by monoless on 2015-12-03.
 */
module.exports = function () {
    var that = this;
    var async = require('async');


    /**
     * 반 학생 수 리셋
     *
     * @param repositories
     * @param groups
     * @param maxGroups
     */
    this.initializeGroups = function (repositories, groups, maxGroups) {
        async.waterfall([
            function (callback) {
                repositories.truncateGroups(callback);
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

                repositories.addGroups(callback, collections);
            },
            function () {
                console.log('initialize group success');
            }
        ]);
    };


    /**
     * 지역정보 리셋
     *
     * @param repositories
     * @param properties
     * @param items
     * @param util
     * @param io
     */
    this.initializePlaces = function (repositories, properties, items, util, io) {
        var places = properties.places;
        var globalLooted = properties.globalLooted;

        async.waterfall([
            function (callback) {
                repositories.truncatePlaces(callback);
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

                repositories.addPlaces(callback, collections);
            },
            function (callback) {
                console.log('initialize places success');
                callback(null);
            },
            function (callback) {
                if (typeof global.restrictTimer !== 'undefined') {
                    clearInterval(global.restrictTimer);
                }

                if (typeof global.killTimer !== 'undefined') {
                    clearInterval(global.killTimer);
                }

                global.restrictTimer = setInterval(
                    that.restrictPlaceEvent.bind(that, repositories),
                    86400000
                );

                global.killTimer = setInterval(
                    that.restrictKillEvent.bind(that, repositories, properties, items, util, io),
                    60000
                );

                callback(null);
            }
        ]);
    };


    /**
     * 금지 구역 설정
     *
     * @param repositories
     */
    this.restrictPlaceEvent = function (repositories) {
        async.waterfall([
            function (callback) {
                repositories.getServerFlag(function (server) {
                    callback(null, server);
                });
            },

            function (server, callback) {
                if ('start' === server.status) {
                    repositories.getPlaces(function (places) {
                        callback(null, server, places);
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
                        repositories.addNews(null, new Date(), 'RESTRICT', undefined, undefined, undefined, shutdown, reserve);
                    }
                }
            }
        ]);
    };


    /**
     * 금지구역내 유저 살해
     *
     * @param repositories
     * @param properties
     * @param items
     * @param util
     * @param io
     */
    this.restrictKillEvent = function (repositories, properties, items, util, io) {
        async.waterfall([
            function (callback) {
                repositories.getServerFlag(function (server) {
                    callback(null, server);
                });
            },

            function (server, callback) {
                if (-1 !== ['start', 'hacking'].indexOf(server.status)) {
                    repositories.getPlaces(function (places) {
                        callback(null, server, places);
                    }, {restrict: true});
                }
            },

            function (server, places, callback) {
                var shutdowns = [];
                for (var i in places) {
                    var place = places[i];
                    shutdowns.push(parseInt(place.idx.replace('place', '')));
                }

                repositories.getUsers(function (users) {
                    callback(null, server, users, shutdowns);
                }, {npc: false, deathAt: null, place: {"$in": shutdowns}});
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

                    util.deathInfoToVictim(
                        items,
                        io,
                        properties.expPerSkillLevel,
                        properties.skills,
                        properties.tactics,
                        properties.staminaRecoverInterval,
                        properties.staminaRecoverIncrease,
                        properties.healthRecoverInterval,
                        properties.healthRecoverIncrease,
                        user
                    );

                    repositories.addNews(
                        null,
                        new Date(),
                        'DEATH',
                        user.messageDying,
                        {weaponMethod: 'restrictArea'},
                        {
                            username: user.username,
                            userGender: user.userGender,
                            groupName: user.groupName,
                            studentNo: user.studentNo
                        }
                    );
                }

                callback(null, server, shutdowns);
            },

            function (server, shutdowns, callback) {
                repositories.getUsers(function (users) {
                    callback(null, server, users);
                }, {npc: false, deathAt: null, place: {"$nin": shutdowns}});
            },

            function (server, survivors) {
                var survivorCount = survivors.length;
                if ('start' === server.status
                    && true === util.isBattleOver(properties.minimumBattleTime, server.started)) {

                    if (1 == survivorCount) {
                        var user = survivors[0];
                        server.status = 'ending';
                        server.winner = user.username;
                        server.save();

                        repositories.addNews(
                            null,
                            new Date(),
                            'ENDING',
                            user.messageDying,
                            {weaponMethod: 'restrictArea'},
                            {
                                username: user.username,
                                userGender: user.userGender,
                                groupName: user.groupName,
                                studentNo: user.studentNo
                            }
                        );

                        repositories.addWinner(null, 'ending', server.started, new Date(), user);

                        io.in(user.username).emit('recv', {
                            type: 'broadcastEnding',
                            log: '갑자기 사이렌 소리가 귀를 때렸다.',
                            except: ''
                        });
                    } else if (0 == survivorCount) {
                        server.status = 'noWinner';
                        server.save();

                        repositories.addNews(null, new Date(), 'NO_WINNER');
                        repositories.addNoWinner(null, server.started, new Date());
                    }
                } else if ('hacking' === server.status
                    && 0 == survivorCount) {
                    server.status = 'noWinner';
                    server.save();

                    repositories.addNews(null, new Date(), 'NO_WINNER');
                    repositories.addNoWinner(null, server.started, new Date());
                }
            }
        ]);
    };


    /**
     * 서버정보 리셋
     *
     * @param repositories
     */
    this.initializeServerFlag = function (repositories) {
        async.waterfall([
            function (callback) {
                repositories.truncateServerFlag(callback);
            },
            function (callback) {
                repositories.addServerFlag(callback, 'start', new Date(), 0, '');
            },
            function () {
                console.log('initialize serverFlag success');
            }
        ]);
    };


    /**
     * 대회상황 리셋
     *
     * @param repositories
     */
    this.initializeNews = function (repositories) {
        async.waterfall([
            function (callback) {
                repositories.truncateNews(callback);
            },
            function (callback) {
                repositories.addNews(callback, new Date(), 'NEWGAME');
            },
            function () {
                console.log('initialize news success');
            }
        ]);
    };


    this.initializeUsers = function (repositories, npc) {
        async.waterfall([
            function (callback) {
                repositories.truncateUsers(callback);
            },
            function () {
                for (var i in npc) {
                    repositories.addUserByObject(null, npc[i]);
                }

                console.log('initialize user success');
            }
        ]);
    };


    /**
     * 게임실행 및 리셋
     *
     * @param repositories
     * @param properties
     * @param items
     * @param util
     * @param io
     */
    this.initialize = function (repositories, properties, items, util, io) {
        that.initializeGroups(repositories, properties.groups, properties.maxGroups);
        that.initializeServerFlag(repositories);
        that.initializePlaces(repositories, properties ,items, util, io);
        that.initializeNews(repositories);
        that.initializeUsers(repositories, require('./../config/npc'));
    };


    /**
     * 가입 시도 검사
     *
     * @param repositories
     * @param remoteAddress
     * @param respawnTime
     * @param maxRecruitTime
     * @param maxRecruitMember
     * @param callback
     */
    this.checkSignup = function (repositories, remoteAddress, respawnTime, maxRecruitTime, maxRecruitMember, callback) {
        var resultStatus = 0;   // normal;
        var options = {};

        async.parallel({
            userCountAll: function (cb) {
                repositories.countUser(function (result) {
                    cb(null, result);
                }, {npc: false});
            },
            userFindByIp: function (cb) {
                repositories.getUsers(function (entries) {
                    cb(null, entries);
                }, {npc: false, ip: remoteAddress});
            },
            flag: function (cb) {
                repositories.getServerFlag(function (entry) {
                    cb(null, entry);
                });
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
     * @param repositories
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
    this.validSignup = function (repositories, remoteAddress, respawnTime, maxRecruitTime,
                                 maxRecruitMember, maxGroups, groupPerMan, gameIcons, expressRequest, formValidation,
                                 callback) {
        async.parallel({
            beforeCheck: function (cb) {
                that.checkSignup(repositories, remoteAddress, respawnTime, maxRecruitTime, maxRecruitMember, cb);
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
                    repositories,
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
     * @param repositories
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
     * @param weapon
     * @param armor
     * @param items
     */
    this.signup
        = function (passport, repositories, remoteAddress, expressRequest, expressResponse, attack,
                    defence, health, stamina, requireExp, groupName, studentNo, clubId, clubName, skillMap,
                    weapon, armor, items) {

        repositories.registerUser(
            function(err){
                if (err) {
                    if (typeof err.message !== 'undefined') {
                        expressRequest.flash('error', err.message);
                    } else {
                        expressRequest.flash('error', '데이터 저장 중 에러가 발생하였습니다.');
                    }

                    expressResponse.redirect('/signup');
                } else {
                    repositories.getGroup(function (group) {
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
                    }, {name: groupName});

                    repositories.addNews(
                        null,
                        new Date(),
                        'ENTRY',
                        undefined,
                        undefined,
                        {
                            username: expressRequest.body.username,
                            userGender: expressRequest.body.userGender,
                            groupName: groupName,
                            studentNo: studentNo
                        }
                    );

                    passport.authenticate('local')(expressRequest, expressResponse, function () {
                        expressResponse.redirect('/intro');
                    });
                }
            },
            {
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
                weapon: weapon,
                armor: armor,

                // items
                item0: items.item0,
                item1: items.item1,
                item2: items.item2,
                item3: items.item3,
                item4: items.item4,
                item5: items.item5
            },
            expressRequest.body.password
        );
    };


    /**
     * 학급 조회해서 남녀 가입유무 판단
     *
     * @param repositories
     * @param isFemale
     * @param maxGroups
     * @param groupPerMan
     * @param callback
     */
    this.validGroupByGender = function (repositories, isFemale, maxGroups, groupPerMan, callback) {
        var resultStatus = true;   // normal;
        repositories.getGroups(function(groups){
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
        });
    };


    /**
     * 계정 정보 리턴
     *
     * @param repositories
     * @param username
     * @param callback
     */
    this.getUserInfo = function (repositories, username, callback) {
        repositories.getUser(function(user){
            callback(null, user);
        }, {username: username});
    };


    /**
     * 위치 정보 리턴
     *
     * @param repositories
     * @param callback
     */
    this.getPlacesInfo = function (repositories, callback) {
        repositories.getPlaces(function(places){
            callback(null, places);
        });
    };


    /**
     * 서버 정보 리턴
     *
     * @param repositories
     * @param callback
     */
    this.getServerInfo = function (repositories, callback) {
        repositories.getServerFlag(function(server){
            callback(null, server);
        });
    };


    /**
     * 계정 + 위치
     *
     * @param repositories
     * @param username
     * @param callback
     */
    this.getBasicInfo = function (repositories, username, callback) {
        async.parallel({
            account: function (cb) {
                that.getUserInfo(repositories, username, cb);
            },
            place: function (cb) {
                that.getPlacesInfo(repositories, cb);
            },
            server: function (cb) {
                that.getServerInfo(repositories, cb);
            }
        }, function (err, result) {
            if (err) {
                console.log(err);
                callback(err);
            } else {
                callback(null, result);
            }
        });
    };
};