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
        if (reqData.value === place.idx) {
            break;
        }
    }

    log.push([userData.account.username, ' 은(는), 주위를 탐색했다...'].join(''));
    userData.account.stamina -= util.exploreConsumeStamina(userData.account.clubId, userData.account.injured);
    if (0 > userData.account.stamina) {
        userData.account.stamina = 0;
    }

    require('./search')(io, options, socket, reqData, userData, 'info', true, log);
};