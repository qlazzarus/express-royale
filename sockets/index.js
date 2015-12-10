module.exports = function(io, options)
{
    io.on('connection', function(socket){
        // connection
        require('./onconnection')(io, options, socket);

        // disconnect
        socket.on('disconnect', function(){
            require('./disconnect')(io, options, socket);
        });
    });
};
