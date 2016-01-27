/**
 * Created by monoless on 2015-12-15.
 */
module.exports = function (io, options, socket, req, res) {
    var util = options.container.get('util');

    var eventName = '';
    var eventLog = '';
    var itemInfo = {};
    var itemInfo2 = {};

    if (typeof req.value === 'undefined') {
        eventName = 'combine';
        eventLog = '배낭 안을 정리할까...';
    } else if (typeof req.value !== 'undefined' && -1 !== req.value.indexOf('info')) {
        eventName = 'info';
        eventLog = '';
    } else if (typeof req.value !== 'undefined' && req.value[0] === req.value[1]) {
        itemInfo = options.container.get('items').getInfo(res.account[req.value[0]].idx);

        eventName = 'info';
        eventLog = ['아이템을 정리합니다.', itemInfo.name + '을(를) 고쳐넣었습니다.'];
    } else if (typeof req.value !== 'undefined') {
        eventName = 'info';
        eventLog = ['아이템을 정리합니다.'];

        itemInfo = options.container.get('items').getInfo(res.account[req.value[0]].idx);
        itemInfo2 = options.container.get('items').getInfo(res.account[req.value[1]].idx);

        var combineResult = util.isCombine(itemInfo, itemInfo2);
        if (true === combineResult) {
            var itemId = res.account[req.value[0]].idx;
            var point = res.account[req.value[0]].point;
            var endurance = res.account[req.value[0]].endurance += res.account[req.value[1]].endurance;
            var attr = [];

            if (-1 !== ['health', 'stamina'].indexOf(itemInfo.equip)
                && (-1 !== res.account[req.value[0]].stats.indexOf('poison') || -1 !== res.account[req.value[1]].stats.indexOf('poison'))) {
                attr = ['poison'];
            }

            if (-1 !== ['health', 'stamina'].indexOf(itemInfo.equip)
                && (-1 !== res.account[req.value[0]].stats.indexOf('super_poison') || -1 !== res.account[req.value[1]].stats.indexOf('super_poison'))) {
                attr = ['super_poison'];
            }

            res.account[req.value[0]] = util.setItemObject(itemId, endurance, point, attr);
            res.account[req.value[1]] = util.setItemEmpty();
            eventLog.push([itemInfo.name, '을(를) 모았다.'].join(''));
        } else {
            eventLog.push([itemInfo.name, '와(과) ', itemInfo2.name, '은(는) 모아지지 않는구나.'].join(''));
        }
    }

    require('./finalize')(io, options, socket, req, res, eventName, true, eventLog);
};