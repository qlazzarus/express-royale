/**
 * Created by monoless on 2015-12-15.
 */
module.exports = function (io, options, socket, req, res) {
    var util = options.container.get('util');

    var eventName = 'info';
    var eventLog = [];

    var poisonSlot = null;
    var poisonInfo = {};
    var inventories = ['item0', 'item1', 'item2', 'item3', 'item4', 'item5'];
    for (var i in inventories) {
        var itemId = res.account[inventories[i]].idx;

        if ('' !== itemId && 'poison' === util.getItem(itemId).equip) {
            poisonSlot = inventories[i];
            break;
        }
    }

    if (typeof req.value !== 'undefined' && null !== poisonSlot) {
        var item = res.account[req.value];
        var itemInfo = util.getItem(item.idx);
        if (-1 !== ['health', 'stamina'].indexOf(itemInfo.equip)) {
            eventLog.push([itemInfo.name, '에 독을 섞었습니다. 스스로 먹지 않도록 조심하자...'].join(''));

            res.account[poisonSlot] = {idx: '', endurance: 0, point: 0};
            res.account[req.value].point = res.account[req.value].point * -1;
        }
    } else if (13 === res.account.clubId && null !== poisonSlot) {
        poisonInfo = util.getItem(res.account[poisonSlot].idx);
        eventName = 'poisonStart';
        eventLog.push(['이 ', poisonInfo.name, '을(를) 섞으면... 후후후.'].join(''));
    }

    require('./finalize')(io, options, socket, req, res, eventName, true, eventLog);
};