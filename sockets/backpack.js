/**
 * Created by monoless on 2015-12-15.
 */
module.exports = function (io, options, socket, req, res) {
    var util = options.container.get('util');

    var eventName = 'backpack';
    var eventLog = '배낭 안에는, 뭐가 들어 있을까...';

    require('./finalize')(io, options, socket, req, res, eventName, true, eventLog);
};