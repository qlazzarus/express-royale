/**
 * Created by monoless on 2015-12-15.
 */
module.exports = function (io, options, socket, req, res) {
    var util = options.container.get('util');

    var eventLog = ['기본방침을 '];

    if (-1 !== [1, 2, 3, 4, 5].indexOf(req.value)) {
        res.account.tactics = req.value;
        eventLog.push({
            '1':'공격중시로',
            '2':'방어중시로',
            '3':'은밀행동으로',
            '4':'탐색행동으로',
            '5':'연속공격으로'
        }[req.value]);
    } else {
        res.account.tactics = 0;
        eventLog.push('보통으로');
    }

    eventLog.push(' 변경했다.');
    require('./finalize')(io, options, socket, req, res, 'info', true, eventLog.join(''));
};