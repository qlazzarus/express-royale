/**
 * Created by monoless on 2015-11-24.
 */
module.exports = function(io, options){
    io.sockets.on('connection', function(socket){
        console.log('client connected');
    });
};