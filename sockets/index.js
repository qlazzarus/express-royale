module.exports = function(io, options)
{
    io.on('connection', function(socket){
        // connection
        require('./onconnection')(io, options, socket);

        // disconnect
        socket.on('disconnect', function(){
            require('./disconnect')(io, options, socket);
        });

        // res
        socket.on('req', function(requestData){
            options.container.get('service').getBasicInfo(
                options.models.getModel('user'),
                options.models.getModel('place'),
                options.models.getModel('server'),
                socket.request.user.username,
                function (err, basicData) {
                    console.log([socket.id, ' request:', requestData.command, ' - ', requestData.value].join(''));
                    if (err) {
                        console.log(err);
                        // TODO error to client
                    } else if ('move' === requestData.command) {
                        require('./move')(io, options, socket, requestData, basicData);
                    } else if ('explore' === requestData.command) {
                        require('./explore')(io, options, socket, requestData, basicData);
                    }
                }
            );
        });
    });
};
