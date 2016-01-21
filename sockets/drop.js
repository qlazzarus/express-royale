/**
 * Created by monoless on 2015-12-16.
 */
module.exports = function(io, options, socket, req, res){
    var util = options.container.get('util');
    var place = {};
    var places = res.place;
    for (var i in places) {
        place = places[i];
        if ('place' + res.account.place === place.idx) {
            break;
        }
    }

    var dropId = req.value;
    var eventLog = [];

    var item = res.account[dropId];
    var info = options.container.get('items').getInfo(item.idx);

    // 아이템 추가
    place.items.push(util.setItemObject(item.idx, item.endurance, item.point, item.stats));
    place.save();

    eventLog.push([info.name, '을(를) 버렸다.'].join(''));
    res.account[dropId] = util.setItemEmpty();

    require('./finalize')(io, options, socket, req, res, 'info', true, eventLog);
};