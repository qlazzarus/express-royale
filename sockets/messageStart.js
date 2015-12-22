/**
 * Created by monoless on 2015-12-15.
 */
module.exports = function (io, options, socket, req, res) {
    var util = options.container.get('util');

    var eventLog = '대사를 변경했습니다.';

    var inputs = req.value;
    if (typeof inputs === 'undefined') {
        inputs = [];
    }

    res.account.message = inputs[0];
    res.account.messageDying = inputs[1];
    res.account.messageComment = inputs[2];

    require('./finalize')(io, options, socket, req, res, 'info', true, eventLog);
};