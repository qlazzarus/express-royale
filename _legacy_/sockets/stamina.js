/**
 * Created by monoless on 2015-12-15.
 */
module.exports = function (io, options, socket, req, res) {
    var util = options.container.get('util');

    var eventName = 'stamina';
    var eventLog = '조금 자둘까.';

    if (4 !== res.account.status) {
        res.account.status = 6;
        res.account.statusChangedAt = new Date();
    }

    require('./finalize')(io, options, socket, req, res, eventName, true, eventLog);
};