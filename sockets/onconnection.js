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
        function (err, res) {
            console.log([socket.id, ' connected'].join(''));
            if (err) {
                console.log(err);
            } else {
                socket.join(res.account.place);
                socket.join(res.account.username);
                require('./finalize')(io, options, socket, {}, res, 'info', true, '자, 어떻게하지...');
            }
        }
    );
};