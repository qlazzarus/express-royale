/**
 * Created by monoless on 2015-12-10.
 */
module.exports = function(io, options, socket){
    console.log('client disconnect - ' + socket.id);
    socket.leaveAll();
};