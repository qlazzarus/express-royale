/**
 * Created by monoless on 2015-12-16.
 */
module.exports = function (io, options, socket, req, res, eventName, eventResult, eventLog) {
    var async = require('async');
    var util = options.container.get('util');

    if (typeof eventLog === 'string') {
        eventLog = [eventLog];
    }

    if (0 >= res.enemy.health) {
        async.waterfall([
            function (callback) {
                options.repositories.countUser(function(result){
                    callback(null, result);
                }, {npc: false, deathAt: null, username: {$ne: res.enemy.username}});
            },

            function (counted, callback) {
                eventLog.push([
                    '<strong class="red">',
                    res.enemy.username,
                    '(',
                    res.enemy.groupName,
                    ' ',
                    0 == res.enemy.userGender ? '남자' : '여자',
                    res.enemy.studentNo,
                    '번)을(를) 살해했다.【남은 인원 ',
                    counted,
                    '명】</strong>'
                ].join(''));

                if ('' !== res.enemy.messageDying) {
                    eventLog.push([
                        '<strong style="color:#ffff00">',
                        res.enemy.username,
                        '『',
                        res.enemy.messageDying,
                        '』</strong>'
                    ].join(''));
                }

                if ('' !== res.account.message) {
                    eventLog.push([
                        '<strong style="color:#00ff00">',
                        res.account.username,
                        '『',
                        res.account.message,
                        '』</strong>'
                    ].join(''));
                }

                res.enemy.status = 4;
                res.enemy.deathCause = req.command;
                res.enemy.deathType = util.dice(7);
                res.enemy.deathAt = new Date();
                res.enemy.health = 0;
                res.account.killCount += 1;

                util.broadcastToAll(
                    socket,
                    res.account.place,
                    options.container.get('properties').places['place' + res.account.place].name,
                    'killed'
                );
                util.deathInfoToVictim(
                    options.container.get('items'),
                    io,
                    options.container.get('properties').expPerSkillLevel,
                    options.container.get('properties').skills,
                    options.container.get('properties').tactics,
                    options.container.get('properties').staminaRecoverInterval,
                    options.container.get('properties').staminaRecoverIncrease,
                    options.container.get('properties').healthRecoverInterval,
                    options.container.get('properties').healthRecoverIncrease,
                    res.enemy
                );

                options.repositories.addNews(
                    null,
                    new Date(),
                    'KILLED',
                    res.enemy.messageDying,
                    {
                        username: res.account.username,
                        userGender: res.account.userGender,
                        groupName: res.account.groupName,
                        studentNo: res.account.studentNo,
                        weaponName: options.container.get('items').getInfo(res.account.weapon.idx).name,
                        weaponMethod: req.command
                    },
                    {
                        username: res.enemy.username,
                        userGender: res.enemy.userGender,
                        groupName: res.enemy.groupName,
                        studentNo: res.enemy.studentNo
                    }
                );

                callback(null, counted);
            },

            function (counted) {
                if ('start' === res.server.status
                    && 1 == counted
                    && true === util.isBattleOver(options.container.get('properties').minimumBattleTime, res.server.started)) {
                    require('./ending')(io, options, socket, req, res, 'ending', eventResult, eventLog);
                } else {
                    req.value = undefined;
                    require('./deathGet')(io, options, socket, req, res, eventName, eventResult, eventLog);
                }
            }
        ]);
    } else {
        require('./finalize')(io, options, socket, req, res, eventName, eventResult, eventLog);
    }
};