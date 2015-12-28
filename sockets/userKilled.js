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
                userModel.count({npc: false, deathAt: null}, callback);
            },

            function (counted, callback) {
                var deathCause = eventName;

                eventLog.push([
                    '<strong class="red">',
                    res.account.username,
                    '(',
                    res.account.groupName,
                    ' ',
                    0 == res.account.userGender ? '남자' : '여자',
                    res.account.studentNo,
                    '번)은(는) 사망했다.'
                ].join(''));

                if ('hackingFailed' === eventName) {
                    eventLog.push('정부『안됐구나, 수상한 행동을 하면 목걸이를 폭파한다고 했잖아』');
                }

                res.account.status = 4;
                res.account.deathCause = deathCause;
                res.account.deathType = util.dice(7);
                res.account.health = 0;

                /*
                res.enemy.killCount += 1;
                */

                var news = new newsModel({
                    registerAt: new Date(),
                    type: 'DEATH',
                    message: res.account.messageDying,
                    murder: {
                        weaponMethod: deathCause
                    },
                    victim: {
                        username: res.account.username,
                        userGender: res.account.userGender,
                        groupName: res.account.groupName,
                        studentNo: res.account.studentNo
                    }
                });

                news.save();

                util.broadcastToAll(socket, res.account.place, 'killed');

                callback(null, counted);
            },

            function (counted) {
                if ('start' === res.server.status
                    && 1 == counted
                    && true === util.isBattleOver(res.server.started)) {
                    // TODO 누군가 대회우승
                }

                require('./finalize')(io, options, socket, req, res, eventName, eventResult, eventLog);
            }
        ]);
    } else {
        require('./finalize')(io, options, socket, req, res, eventName, eventResult, eventLog);
    }
};