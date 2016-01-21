/**
 * Created by monoless on 2015-12-16.
 */
module.exports = function (io, options, socket, req, res, eventName, eventResult, eventLog) {
    var async = require('async');
    var util = options.container.get('util');

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
                options.repositories.getUser(function(user){
                    callback(null, user);
                }, {username: targetName, place: res.account.place});
            },

            function (enemy) {
                if (targetName !== res.account.username) {
                    res.enemy = enemy;
                    if ('armorBody' === targetSlot && 'armorDefault' === res.enemy.armor.body.idx) {

                    } else if ('weapon' === targetSlot && 'weaponDefault' === res.enemy.armor.body.idx) {

                    } else if ('armorBody' === targetSlot) {
                        res.account[emptySlot] = enemy.armor.body;
                        res.enemy.armor.body = util.setItemObject('armorDefault', 0, 0);
                    } else if ('armorHead' === targetSlot) {
                        res.account[emptySlot] = enemy.armor.head;
                        res.enemy.armor.head = util.setItemEmpty();
                    } else if ('armorArm' === targetSlot) {
                        res.account[emptySlot] = enemy.armor.arm;
                        res.enemy.armor.arm = util.setItemEmpty();
                    } else if ('armorFoot' === targetSlot) {
                        res.account[emptySlot] = enemy.armor.foot;
                        res.enemy.armor.foot = util.setItemEmpty();
                    } else if ('armorAccessory' === targetSlot) {
                        res.account[emptySlot] = enemy.armor.accessory;
                        res.enemy.armor.accessory = util.setItemEmpty();
                    } else if ('weapon' === targetSlot) {
                        res.account[emptySlot] = enemy[targetSlot];
                        res.enemy[targetSlot] = util.setItemObject('weaponDefault', 0, 0);
                    } else {
                        res.account[emptySlot] = enemy[targetSlot];
                        res.enemy[targetSlot] = util.setItemEmpty();
                    }

                    if ('' !== res.account[emptySlot].idx) {
                        eventLog.push([
                            res.account.username,
                            '은(는) ',
                            options.container.get('items').getInfo(res.account[emptySlot].idx).name,
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