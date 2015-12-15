/**
 * Created by monoless on 2015-12-14.
 */
module.exports = function(io, options, socket, reqData, userData){
    var util = options.container.get('util');
    var log = [];
    var place = {};
    var places = userData.place;
    for (var i in places) {
        place = places[i];
        if ('place' + userData.account.place === place.idx) {
            break;
        }
    }

    var isDeath = false;

    log.push([userData.account.username, ' 은(는), 주위를 탐색했다...'].join(''));
    userData.account.stamina -= util.exploreConsumeStamina(userData.account.clubId, userData.account.injured);
    if (0 > userData.account.stamina) {
        var drainStatus = require('./drain')(io, options, socket, reqData, userData, 'explore', result, log);
        isDeath = drainStatus.isDeath;
        userData = drainStatus.userData;
        log = drainStatus.eventLog;
    }

    if (false === isDeath) {
        require('./search')(io, options, socket, reqData, userData, 'explore', true, log);
    } else {
        // TODO 사망
    }
};