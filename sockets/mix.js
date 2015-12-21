/**
 * Created by monoless on 2015-12-15.
 */
module.exports = function (io, options, socket, req, res) {
    var util = options.container.get('util');

    var eventName = 'mix';
    var eventLog = 'mix';

    require('./finalize')(io, options, socket, req, res, eventName, true, eventLog);
};