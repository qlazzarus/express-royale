/**
 * Created by monoless on 2015-12-02.
 */
module.exports = function (io, socket, options) {
    var clients = options.container.get('clients');
    options.container.set('clients', clients);

    var index = clients.indexOf(socket.id);
    if (index != -1) {
        clients.splice(index, 1);
        options.container.set('clients', clients);
    }

    console.info('client gone -' + socket.id);
};