/**
 * Created by monoless on 2015-12-15.
 */
module.exports = function (io, options, socket, req, res) {
    var util = options.container.get('util');

    var isDeath = false;
    var eventName = 'info';
    var eventLog = [];

    if (typeof req.value !== 'undefined' && 13 == res.account.clubId) {
        var item = res.account[req.value];
        var itemInfo = util.getItem(item.idx);
        if (-1 !== ['health', 'stamina'].indexOf(itemInfo.equip)) {
            if (0 < item.point) {
                eventLog.push(['으음... ', itemInfo.name, '은(는) 먹어도 안전한 것 같다...'].join(''));
            } else {
                eventLog.push(['으음... ', itemInfo.name, '은(는) 독이 섞여 있는듯 하다...'].join(''));
            }

            res.account.stamina -= util.getDetoxStamina();
            if (0 >= res.account.stamina) {
                // 스테미너 부족
                var drainStatus = require('./drain')(io, options, socket, req, res, eventName, true, eventLog);
                isDeath = drainStatus.isDeath;
                res = drainStatus.userData;
                eventLog = drainStatus.eventLog;
            }
        }
    } else if (13 === res.account.clubId) {
        eventName = 'poisonCheck';
        eventLog.push('뭔가가 섞여있지 않은지 조사해보자...');
    }

    if (false === isDeath) {
        require('./finalize')(io, options, socket, req, res, eventName, true, eventLog);
    } else {
        require('./userKilled')(io, options, socket, req, res, 'tired', true, eventLog);
    }
};