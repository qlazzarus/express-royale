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

    var dropId = req.command.replace(/drop_item/, '');
    var itemList = [];
    var eventLog = [];
    for (var i = 0; i <= 5; i++) {
        var item = res.account['item' + i];
        if (i == dropId) {
            var info = util.getItem(item.idx);

            // 아이템 추가
            place.items.push(item.idx);
            place.save();

            eventLog.push([info.name, '을(를) 버렸다.'].join(''));
            item = {idx:'', endurance:0, point:0};
        }

        if ('' !== item.idx) {
            itemList.push(item);
        }
    }

    for (var i = 0; i <= 5; i++) {
        if (typeof itemList[i] !== 'undefined') {
            res.account['item' + i] = itemList[i];
        } else {
            res.account['item' + i] = {idx:'', endurance:0, point:0};
        }
    }

    require('./finalize')(io, options, socket, req, res, 'info', true, eventLog);
};