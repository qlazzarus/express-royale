/**
 * Created by monoless on 2015-12-16.
 */
module.exports = function (io, options, socket, req, res, eventName, eventResult, eventLog) {
    var async = require('async');
    var util = options.container.get('util');
    var userModel = options.models.getModel('user');
    var newsModel = options.models.getModel('news');

    if (typeof eventLog === 'string') {
        eventLog = [eventLog];
    }

    if (0 >= res.account.health) {
        async.waterfall([
            function (callback) {
                userModel.count({npc: false, deathAt: null, username: {$ne: res.account.username}}, callback);
            },

            function (counted, callback) {
                eventLog.push([
                    '<strong class="red">',
                    res.account.username,
                    '(',
                    res.account.groupName,
                    ' ',
                    0 == res.account.userGender ? '남자' : '여자',
                    res.account.studentNo,
                    '번)은(는) 사망했다.</strong>'
                ].join(''));

                var newsType = 'DEATH';
                var deathCause = eventName;
                var murder = {
                    weaponMethod: deathCause
                };

                if ('hackingFailed' === eventName) {
                    eventLog.push('정부『안됐구나, 수상한 행동을 하면 목걸이를 폭파한다고 했잖아』');
                } else if ('attackResult' === eventName) {
                    if ('' !== res.enemy.message) {
                        eventLog.push([
                            '<strong style="color:#00ff00">',
                            res.enemy.username,
                            '『',
                            res.enemy.message,
                            '』</strong>'
                        ].join(''));
                    }

                    newsType = 'KILLED';
                    deathCause = req.command;
                    murder = {
                        username: res.enemy.username,
                        userGender: res.enemy.userGender,
                        groupName: res.enemy.groupName,
                        studentNo: res.enemy.studentNo,
                        weaponName: util.getItem(res.enemy.weapon.idx).name,
                        weaponMethod: req.command
                    };

                    res.enemy.killCount += 1;
                }

                res.account.status = 4;
                res.account.deathCause = deathCause;
                res.account.deathType = util.dice(7);
                res.account.deathAt = new Date();
                res.account.health = 0;

                if ('tired' !== eventName) {
                    util.broadcastToAll(socket, res.account.place, 'killed');
                }

                var news = new newsModel({
                    registerAt: new Date(),
                    type: newsType,
                    message: res.account.messageDying,
                    murder: murder,
                    victim: {
                        username: res.account.username,
                        userGender: res.account.userGender,
                        groupName: res.account.groupName,
                        studentNo: res.account.studentNo
                    }
                });

                news.save();

                callback(null, counted);
            },

            function (counted) {
                if ('start' === res.server.status
                    && 1 == counted
                    && true === util.isBattleOver(res.server.started)) {
                    require('./ending')(io, options, socket, req, res, 'endingOther', eventResult, eventLog);
                } else {
                    require('./finalize')(io, options, socket, req, res, eventName, eventResult, eventLog);
                }
            }
        ]);
    } else {
        require('./finalize')(io, options, socket, req, res, eventName, eventResult, eventLog);
    }
};