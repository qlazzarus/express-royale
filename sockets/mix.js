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
        eventName = 'mix';
        eventLog = '지금 가지고 있는 것을 조합해서, 뭔가 만들 수 없을까?';
    } else if (typeof req.value !== 'undefined' && -1 !== req.value.indexOf('info')) {
        eventName = 'info';
        eventLog = '';
    } else if (typeof req.value !== 'undefined' && req.value[0] === req.value[1]) {
        itemInfo = options.container.get('items').getInfo(res.account[req.value[0]].idx);

        eventName = 'info';
        eventLog = ['아이템을 합성합니다.', itemInfo.name + '을(를) 바라봤다.'];
    } else if (typeof req.value !== 'undefined') {
        var mixResult = util.getMixItem(
            options.container.get('items').mixItems,
            res.account[req.value[0]].idx,
            res.account[req.value[1]].idx
        );
        var emptySlot = util.getEmptyItemSlot(
            res.account.item0,
            res.account.item1,
            res.account.item2,
            res.account.item3,
            res.account.item4,
            res.account.item5
        );
        itemInfo = options.container.get('items').getInfo(res.account[req.value[0]].idx);
        itemInfo2 = options.container.get('items').getInfo(res.account[req.value[1]].idx);

        eventName = 'info';

        if (null === emptySlot) {
            eventLog = '더 이상 배낭에 들어가지 않습니다.';
        } else if (null === mixResult) {
            eventLog = [
                '아이템을 합성합니다.',
                [itemInfo.name, '와(과) ', itemInfo2.name, '은(는) 조합되지 않는구나.'].join('')
            ];
        } else {
            var itemInfo3 = options.container.get('items').getInfo(mixResult);
            res.account[req.value[0]] = util.setItemEmpty();
            res.account[req.value[1]] = util.setItemEmpty()
            res.account[emptySlot] = util.setItemObject(mixResult, itemInfo3.endurance, itemInfo3.point, []);

            eventLog = [
                '아이템을 합성합니다.',
                [itemInfo.name, '와(과) ', itemInfo2.name, '(으)로 ', itemInfo3.name, '이(가) 나왔다!'].join('')
            ];
        }
    }

    require('./finalize')(io, options, socket, req, res, eventName, true, eventLog);
};