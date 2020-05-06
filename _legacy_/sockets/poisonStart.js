/**
 * Created by monoless on 2015-12-15.
 */
module.exports = function (io, options, socket, req, res) {
    var util = options.container.get('util');

    var eventName = 'info';
    var eventLog = [];

    var poisonSlot = util.findItemSlotByEquip(
        'poison',
        res.account.item0,
        res.account.item1,
        res.account.item2,
        res.account.item3,
        res.account.item4,
        res.account.item5
    );

    if (null !== poisonSlot && typeof req.value !== 'undefined') {
        var item = res.account[req.value];
        var itemInfo = util.getItem(item.idx);
        if (-1 !== ['health', 'stamina'].indexOf(itemInfo.equip)) {
            eventLog.push([itemInfo.name, '에 독을 섞었습니다. 스스로 먹지 않도록 조심하자...'].join(''));

            res.account[poisonSlot] = {idx: '', endurance: 0, point: 0};
            res.account[req.value].point = res.account[req.value].point * -1;
        }
    } else if (null !== poisonSlot) {
        var poisonInfo = util.getItem(res.account[poisonSlot].idx);
        eventName = 'poisonStart';
        eventLog.push(['이 ', poisonInfo.name, '을(를) 섞으면... 후후후.'].join(''));
    }

    require('./finalize')(io, options, socket, req, res, eventName, true, eventLog);
};