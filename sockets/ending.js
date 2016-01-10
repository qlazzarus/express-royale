/**
 * Created by monoless on 2015-12-16.
 */
module.exports = function (io, options, socket, req, res, eventName, eventResult, eventLog) {
    var util = options.container.get('util');
    var userModel = options.models.getModel('user');
    var newsModel = options.models.getModel('news');
    var winnerModel = options.models.getModel('winner');

    var news, winner;

    if (typeof eventLog === 'string') {
        eventLog = [eventLog];
    }

    if ('hackingSuccess' === eventName) {
        res.server.status = eventName;
        res.server.winner = res.account.username;
        res.server.save();

        news = new newsModel({
            registerAt: new Date(),
            type: 'HACKING_SUCCESS',
            message: res.account.messageDying,
            victim: {
                username: res.account.username,
                userGender: res.account.userGender,
                groupName: res.account.groupName,
                studentNo: res.account.studentNo
            }
        });
        news.save();

        winner = winnerModel({
            status: eventName,
            started: res.server.started,
            ended: new Date(),
            username: res.account.username,
            userGender: res.account.userGender,
            userIcon: res.account.userIcon,
            message: res.account.message,
            messageDying: res.account.messageDying,
            messageComment: res.account.messageComment,
            attack: res.account.attack,
            defence: res.account.defence,
            health: res.account.health,
            maxHealth: res.account.maxHealth,
            stamina: res.account.stamina,
            killCount: res.account.killCount,
            level: res.account.level,
            requireExp: res.account.requireExp,
            injured: res.account.injured,
            groupName: res.account.groupName,
            studentNo: res.account.studentNo,
            clubId: res.account.clubId,
            clubName: res.account.clubName,
            tactics: res.account.tactics,
            shotSkill: res.account.shotSkill,
            cutSkill: res.account.cutSkill,
            throwSkill: res.account.throwSkill,
            fistSkill: res.account.fistSkill,
            bowSkill: res.account.bowSkill,
            meleeSkill: res.account.meleeSkill,
            bombSkill: res.account.bombSkill,
            pokeSkill: res.account.pokeSkill,
            weapon: {
                idx: res.account.weapon.idx,
                endurance: res.account.weapon.endurance,
                point: res.account.weapon.point
            },
            armor: {
                head: {
                    idx: res.account.armor.head.idx,
                    endurance: res.account.armor.head.endurance,
                    point: res.account.armor.head.point
                },
                body: {
                    idx: res.account.armor.body.idx,
                    endurance: res.account.armor.body.endurance,
                    point: res.account.armor.body.point
                },
                arm: {
                    idx: res.account.armor.arm.idx,
                    endurance: res.account.armor.arm.endurance,
                    point: res.account.armor.arm.point
                },
                foot: {
                    idx: res.account.armor.foot.idx,
                    endurance: res.account.armor.foot.endurance,
                    point: res.account.armor.foot.point
                },
                accessory: {
                    idx: res.account.armor.accessory.idx,
                    endurance: res.account.armor.accessory.endurance,
                    point: res.account.armor.accessory.point
                }
            },
            item0: {
                idx: res.account.item0.idx,
                endurance: res.account.item0.endurance,
                point: res.account.item0.point
            },
            item1: {
                idx: res.account.item1.idx,
                endurance: res.account.item1.endurance,
                point: res.account.item1.point
            },
            item2: {
                idx: res.account.item2.idx,
                endurance: res.account.item2.endurance,
                point: res.account.item2.point
            },
            item3: {
                idx: res.account.item3.idx,
                endurance: res.account.item3.endurance,
                point: res.account.item3.point
            },
            item4: {
                idx: res.account.item4.idx,
                endurance: res.account.item4.endurance,
                point: res.account.item4.point
            },
            item5: {
                idx: res.account.item5.idx,
                endurance: res.account.item5.endurance,
                point: res.account.item5.point
            }
        });
        winner.save();

        socket.broadcast.emit('recv', {
            type: 'broadcastEnding',
            log: '갑자기 사이렌 소리가 귀를 때렸다.',
            except: ''
        });
    } else if ('endingOther' === eventName) {
        userModel.findOne({npc: false, deathAt:null, username: {$ne: res.account.username}}, function (err, user) {
            if (err) {
                console.log(err);
                throw new Error(err);
            } else {
                res.server.status = 'ending';
                res.server.winner = user.username;
                res.server.save();

                news = new newsModel({
                    registerAt: new Date(),
                    type: 'ENDING',
                    message: user.messageDying,
                    victim: {
                        username: user.username,
                        userGender: user.userGender,
                        groupName: user.groupName,
                        studentNo: user.studentNo
                    }
                });

                news.save();

                winner = winnerModel({
                    status: 'ending',
                    started: res.server.started,
                    ended: new Date(),
                    username: user.username,
                    userGender: user.userGender,
                    userIcon: user.userIcon,
                    message: user.message,
                    messageDying: user.messageDying,
                    messageComment: user.messageComment,
                    attack: user.attack,
                    defence: user.defence,
                    health: user.health,
                    maxHealth: user.maxHealth,
                    stamina: user.stamina,
                    killCount: user.killCount,
                    level: user.level,
                    requireExp: user.requireExp,
                    injured: user.injured,
                    groupName: user.groupName,
                    studentNo: user.studentNo,
                    clubId: user.clubId,
                    clubName: user.clubName,
                    tactics: user.tactics,
                    shotSkill: user.shotSkill,
                    cutSkill: user.cutSkill,
                    throwSkill: user.throwSkill,
                    fistSkill: user.fistSkill,
                    bowSkill: user.bowSkill,
                    meleeSkill: user.meleeSkill,
                    bombSkill: user.bombSkill,
                    pokeSkill: user.pokeSkill,
                    weapon: {
                        idx: user.weapon.idx,
                        endurance: user.weapon.endurance,
                        point: user.weapon.point
                    },
                    armor: {
                        head: {
                            idx: user.armor.head.idx,
                            endurance: user.armor.head.endurance,
                            point: user.armor.head.point
                        },
                        body: {
                            idx: user.armor.body.idx,
                            endurance: user.armor.body.endurance,
                            point: user.armor.body.point
                        },
                        arm: {
                            idx: user.armor.arm.idx,
                            endurance: user.armor.arm.endurance,
                            point: user.armor.arm.point
                        },
                        foot: {
                            idx: user.armor.foot.idx,
                            endurance: user.armor.foot.endurance,
                            point: user.armor.foot.point
                        },
                        accessory: {
                            idx: user.armor.accessory.idx,
                            endurance: user.armor.accessory.endurance,
                            point: user.armor.accessory.point
                        }
                    },
                    item0: {
                        idx: user.item0.idx,
                        endurance: user.item0.endurance,
                        point: user.item0.point
                    },
                    item1: {
                        idx: user.item1.idx,
                        endurance: user.item1.endurance,
                        point: user.item1.point
                    },
                    item2: {
                        idx: user.item2.idx,
                        endurance: user.item2.endurance,
                        point: user.item2.point
                    },
                    item3: {
                        idx: user.item3.idx,
                        endurance: user.item3.endurance,
                        point: user.item3.point
                    },
                    item4: {
                        idx: user.item4.idx,
                        endurance: user.item4.endurance,
                        point: user.item4.point
                    },
                    item5: {
                        idx: user.item5.idx,
                        endurance: user.item5.endurance,
                        point: user.item5.point
                    }
                });
                winner.save();

                socket.broadcast.emit('recv', {
                    type: 'broadcastEnding',
                    log: '갑자기 사이렌 소리가 귀를 때렸다.',
                    except: ''
                });
            }
        });
    } else {
        res.server.status = 'ending';
        res.server.winner = res.account.username;
        res.server.save();

        news = new newsModel({
            registerAt: new Date(),
            type: 'ENDING',
            message: res.account.messageDying,
            victim: {
                username: res.account.username,
                userGender: res.account.userGender,
                groupName: res.account.groupName,
                studentNo: res.account.studentNo
            }
        });

        news.save();

        winner = winnerModel({
            status: eventName,
            started: res.server.started,
            ended: new Date(),
            username: res.account.username,
            userGender: res.account.userGender,
            userIcon: res.account.userIcon,
            message: res.account.message,
            messageDying: res.account.messageDying,
            messageComment: res.account.messageComment,
            attack: res.account.attack,
            defence: res.account.defence,
            health: res.account.health,
            maxHealth: res.account.maxHealth,
            stamina: res.account.stamina,
            killCount: res.account.killCount,
            level: res.account.level,
            requireExp: res.account.requireExp,
            injured: res.account.injured,
            groupName: res.account.groupName,
            studentNo: res.account.studentNo,
            clubId: res.account.clubId,
            clubName: res.account.clubName,
            tactics: res.account.tactics,
            shotSkill: res.account.shotSkill,
            cutSkill: res.account.cutSkill,
            throwSkill: res.account.throwSkill,
            fistSkill: res.account.fistSkill,
            bowSkill: res.account.bowSkill,
            meleeSkill: res.account.meleeSkill,
            bombSkill: res.account.bombSkill,
            pokeSkill: res.account.pokeSkill,
            weapon: {
                idx: res.account.weapon.idx,
                endurance: res.account.weapon.endurance,
                point: res.account.weapon.point
            },
            armor: {
                head: {
                    idx: res.account.armor.head.idx,
                    endurance: res.account.armor.head.endurance,
                    point: res.account.armor.head.point
                },
                body: {
                    idx: res.account.armor.body.idx,
                    endurance: res.account.armor.body.endurance,
                    point: res.account.armor.body.point
                },
                arm: {
                    idx: res.account.armor.arm.idx,
                    endurance: res.account.armor.arm.endurance,
                    point: res.account.armor.arm.point
                },
                foot: {
                    idx: res.account.armor.foot.idx,
                    endurance: res.account.armor.foot.endurance,
                    point: res.account.armor.foot.point
                },
                accessory: {
                    idx: res.account.armor.accessory.idx,
                    endurance: res.account.armor.accessory.endurance,
                    point: res.account.armor.accessory.point
                }
            },
            item0: {
                idx: res.account.item0.idx,
                endurance: res.account.item0.endurance,
                point: res.account.item0.point
            },
            item1: {
                idx: res.account.item1.idx,
                endurance: res.account.item1.endurance,
                point: res.account.item1.point
            },
            item2: {
                idx: res.account.item2.idx,
                endurance: res.account.item2.endurance,
                point: res.account.item2.point
            },
            item3: {
                idx: res.account.item3.idx,
                endurance: res.account.item3.endurance,
                point: res.account.item3.point
            },
            item4: {
                idx: res.account.item4.idx,
                endurance: res.account.item4.endurance,
                point: res.account.item4.point
            },
            item5: {
                idx: res.account.item5.idx,
                endurance: res.account.item5.endurance,
                point: res.account.item5.point
            }
        });
        winner.save();
    }

    require('./finalize')(io, options, socket, req, res, eventName, eventResult, eventLog);
};