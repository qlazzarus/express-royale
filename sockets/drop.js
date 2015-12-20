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
    var info = util.getItem(item.idx);

    // 아이템 추가
    place.items.push({idx:item.idx, endurance:item.endurance, point:item.point});
    place.save();

    eventLog.push([info.name, '을(를) 버렸다.'].join(''));
    res.account[dropId] = {idx:'', endurance:0, point:0};

    require('./finalize')(io, options, socket, req, res, 'info', true, eventLog);
};