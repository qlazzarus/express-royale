/**
 * Created by monoless on 2015-12-16.
 */
module.exports = function (io, options, socket, req, res, eventName, eventResult, eventLog) {
    var async = require('async');
    var util = options.container.get('util');
    var userModel = options.models.getModel('user');

    if (typeof eventLog === 'string') {
        eventLog = [eventLog];
    }

    var emptySlot = util.getEmptyItemSlot(
        res.account.item0,
        res.account.item1,
        res.account.item2,
        res.account.item3,
        res.account.item4,
        res.account.item5
    );

    if (typeof req.value === 'undefined' && 0 >= res.enemy.health && res.enemy.place === res.account.place) {
        eventName = 'deathGet';
        eventLog.push([res.enemy.username, '의 시체를 발견했다.'].join(''));
        eventLog.push(util.getCorpseMessage(res.enemy.deathCause, res.enemy.deathType));
        eventLog.push('배낭 속을 뒤져볼까....');
        require('./finalize')(io, options, socket, req, res, eventName, eventResult, eventLog);
    } else if (req.value instanceof Array && null !== emptySlot) {
        var targetName = req.value[0];
        var targetSlot = req.value[1];

        async.waterfall([
            function (callback) {
                userModel.findOne({username: targetName, place: res.account.place}, function(err, user) {
                    if (err) {
                        console.log(err);
                        throw new Error(err);
                    } else if (null !== user) {
                        callback(null, user);
                    }
                });
            },

            function (enemy) {
                if (targetName !== res.account.username) {
                    res.enemy = enemy;
                    if ('armorBody' === targetSlot) {
                        res.account[emptySlot] = enemy.armor.body;
                        res.enemy.armor.body = {idx: 'armorDefault', point: 0, endurance: 0};
                    } else if ('armorHead' === targetSlot) {
                        res.account[emptySlot] = enemy.armor.head;
                        res.enemy.armor.head = {idx: '', point: 0, endurance: 0};
                    } else if ('armorArm' === targetSlot) {
                        res.account[emptySlot] = enemy.armor.arm;
                        res.enemy.armor.arm = {idx: '', point: 0, endurance: 0};
                    } else if ('armorFoot' === targetSlot) {
                        res.account[emptySlot] = enemy.armor.foot;
                        res.enemy.armor.foot = {idx: '', point: 0, endurance: 0};
                    } else if ('armorAccessory' === targetSlot) {
                        res.account[emptySlot] = enemy.armor.accessory;
                        res.enemy.armor.accessory = {idx: '', point: 0, endurance: 0};
                    } else if ('weapon' === targetSlot) {
                        res.account[emptySlot] = enemy[targetSlot];
                        res.enemy[targetSlot] = {idx: 'weaponDefault', point: 0, endurance: 0};
                    } else {
                        res.account[emptySlot] = enemy[targetSlot];
                        res.enemy[targetSlot] = {idx: '', point: 0, endurance: 0};
                    }

                    if ('' !== res.account[emptySlot].idx) {
                        eventLog.push([
                            res.account.username,
                            '은(는) ',
                            util.getItem(res.account[emptySlot].idx).name,
                            '을(를) 입수했다.'
                        ].join(''));
                    } else {
                        eventLog.push('어디갔지?! 아이템이 사라져 버렸다...');
                    }
                } else {
                    eventLog.push('스스로 자기 물건을 뺏어봤다.<br />허무하다...');
                }

                require('./finalize')(io, options, socket, req, res, eventName, eventResult, eventLog);
            }
        ]);
    } else if (req.value instanceof Array && null === emptySlot) {
        eventLog.push('더 이상 소지품을 가질 수 없다.');
        require('./finalize')(io, options, socket, req, res, eventName, eventResult, eventLog);
    } else if (req.value === 'cancel') {
        eventLog.push('빼앗는 것을 포기했다.');
        require('./finalize')(io, options, socket, req, res, eventName, eventResult, eventLog);
    }
};