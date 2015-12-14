/**
 * Created by monoless on 2015-12-10.
 */
module.exports = function (io, options, socket) {
    var util = options.container.get('util');
    options.container.get('service').getBasicInfo(
        options.models.getModel('user'),
        options.models.getModel('place'),
        options.models.getModel('server'),
        socket.request.user.username,
        function (err, data) {
            console.log([socket.id, ' connected'].join(''));
            if (err) {
                console.log(err);
            } else {
                socket.join(data.account.place);
                socket.join(data.account.username);
                socket.emit('recv', util.setReceivePacket(null, 'info', true, '자, 어떻게하지...', data));
            }
        }
    );
};