/**
 * Created by monoless on 2015-12-15.
 */
module.exports = function (io, options, socket, req, res) {
    var util = options.container.get('util');

    var isDeath = false;
    var eventName = '';
    var eventLog = [];

    if (typeof req.value !== 'undefined') {
        eventName = 'info';
        eventLog.push('응급처치를 했다.');
        var part = req.value;
        var injureIdx = res.account.injured.indexOf(part);
        if (-1 !== injureIdx) {
            res.account.injured.splice(injureIdx, 1);
            res.account.stamina -= util.getFirstAidStamina();

            if (0 >= res.account.stamina) {
                // 스테미너 부족
                var drainStatus = require('./drain')(io, options, socket, req, res, eventName, true, eventLog);
                isDeath = drainStatus.isDeath;
                res = drainStatus.userData;
                eventLog = drainStatus.eventLog;
            }
        }
    } else {
        eventName = 'injured';
        eventLog.push('상처를 치료 할까...');
    }

    if (false === isDeath) {
        require('./finalize')(io, options, socket, req, res, eventName, true, eventLog);
    } else {
        require('./userKilled')(io, options, socket, req, res, 'tired', true, eventLog);
    }
};