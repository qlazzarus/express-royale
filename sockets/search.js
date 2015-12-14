/**
 * Created by monoless on 2015-12-14.
 */
module.exports = function(io, options, socket, reqData, userData, eventName, eventResult, eventLog){
    var util = options.container.get('util');

    socket.emit('recv', util.setReceivePacket(reqData.queueId, eventName, eventResult, eventLog, userData));
};