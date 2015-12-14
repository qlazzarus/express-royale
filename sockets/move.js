/**
 * Created by monoless on 2015-12-14.
 */
module.exports = function(io, options, socket, reqData, userData){
    var util = options.container.get('util');
    var result = true;
    var log = [];
    var place = {};
    var places = userData.place;
    for (var i in places) {
        place = places[i];
        if (reqData.value === place.idx) {
            break;
        }
    }

    if (true === place.restrict && 'hacked' !== userData.server.status) {
        result = false;
        log.push([place.name, ' 쪽은 금지구역이다. 이동할 수 없어...'].join(''));
    } else if (true === place.restrictReserve) {
        log.push([place.name, ' 에 이동했다. 다음에 이곳은 금지지역이 되겠구나.\n', util.getPlaceMessage(place.idx)].join(''));
    } else {
        log.push([place.name, ' 에 이동했다.\n', util.getPlaceMessage(place.idx)].join(''));
    }

    if (true === result) {
        userData.account.place = reqData.value.replace(/place/, '');
        userData.account.stamina -= util.moveConsumeStamina(userData.account.clubId, userData.account.injured);
        if (0 > userData.account.stamina) {
            userData.account.stamina = 0;
        }
    }

    socket.emit('recv', util.setReceivePacket(reqData.queueId, 'info', result, log, userData));
};