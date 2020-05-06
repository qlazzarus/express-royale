/**
 * Created by monoless on 2015-12-15.
 */
module.exports = function (io, options, socket, req, res) {
    var util = options.container.get('util');

    var eventName = 'health';
    var eventLog = '상처를 치료하자.';

    if (4 !== res.account.status) {
        res.account.status = 5;
        res.account.statusChangedAt = new Date();
    }

    require('./finalize')(io, options, socket, req, res, eventName, true, eventLog);
};