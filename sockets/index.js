module.exports = function(io, options)
{
    if (null === options.container.get('clients')) {
        options.container.set('clients', []);
    }

    io.on('connection', function(socket){
        // connection
        var clients = options.container.get('clients');
        clients.push(socket.id);
        options.container.set('clients', clients);
        console.log('new client connected - ' + socket.id);


        // disconnect
        socket.on('disconnect', function(){
            require('./disconnect')(io, socket, options);
        });


        // custom event goes
        socket.on('serverStatus', function(receive){
            require('./serverStatus')(io, socket, options, receive);
        });
    });
};
