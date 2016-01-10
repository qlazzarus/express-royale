/**
 * Created by monoless on 2015-12-14.
 */
module.exports = function(io, options, socket, req, res){
    var util = options.container.get('util');
    var result = true;
    var log = [];
    var place = {};
    var places = res.place;
    for (var i in places) {
        place = places[i];
        if (req.value === place.idx) {
            break;
        }
    }

    var isDeath = false;
    if (true === place.restrict) {
        result = false;
        log.push([place.name, ' 쪽은 금지구역이다. 이동할 수 없어...'].join(''));
    } else if (true === place.restrictReserve) {
        log.push([place.name, ' 에 이동했다. 다음에 이곳은 금지지역이 되겠구나.\n', util.getPlaceMessage(place.idx)].join(''));
    } else {
        log.push([place.name, ' 에 이동했다.\n', util.getPlaceMessage(place.idx)].join(''));
    }

    if (true === result) {
        socket.leave(res.account.place);
        res.account.place = req.value.replace('place', '');
        socket.join(res.account.place);
        res.account.stamina -= util.moveConsumeStamina(res.account.clubId, res.account.injured);
        if (0 > res.account.stamina) {
            var drainStatus = require('./drain')(io, options, socket, req, res, 'move', result, log);
            isDeath = drainStatus.isDeath;
            res = drainStatus.userData;
            log = drainStatus.eventLog;
        }

        if (false === isDeath) {
            require('./search')(io, options, socket, req, res, 'move', result, log);
        } else {
            require('./userKilled')(io, options, socket, req, res, 'tired', result, log);
        }
    } else {
        require('./finalize')(io, options, socket, req, res, 'move', result, log);
    }
};