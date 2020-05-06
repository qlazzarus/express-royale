/**
 * Created by monoless on 2015-12-14.
 */
module.exports = function(io, options, socket, req, res){
    var util = options.container.get('util');
    var log = [];
    var place = {};
    var places = res.place;
    for (var i in places) {
        place = places[i];
        if ('place' + res.account.place === place.idx) {
            break;
        }
    }

    var isDeath = false;

    log.push([res.account.username, ' 은(는), 주위를 탐색했다...'].join(''));
    res.account.stamina -= util.exploreConsumeStamina(res.account.clubId, res.account.injured);
    if (0 >= res.account.stamina) {
        var drainStatus = require('./drain')(io, options, socket, req, res, 'explore', true, log);
        isDeath = drainStatus.isDeath;
        res = drainStatus.userData;
        log = drainStatus.eventLog;
    }

    if (false === isDeath) {
        require('./search')(io, options, socket, req, res, 'explore', true, log);
    } else {
        require('./userKilled')(io, options, socket, req, res, 'tired', true, log);
    }
};