/**
 * Created by monoless on 2015-11-24.
 */
module.exports = function (io, socket, options, receive) {
    var clients = options.container.get('clients');
    var serverModel = options.models.getModel('server');

    serverModel.findOne({}, function(err, flag){
        if (err) {
            throw new Error('Initialize Game Failed');
        }

        if (null == flag) {
            flag = new serverModel({
                status: 'start',
                started: new Date()
            });

            flag.save(function (err) {
                if (err) {
                    throw new Error('Save Game Flag Failed');
                }
            });
        }

        console.log('send server status - ' + socket.id);
        io.sockets.connected[socket.id].emit('serverStatusResponse', flag);
    });
};