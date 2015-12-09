module.exports = function(io, options)
{
    io.on('connection', function(socket){
        // connection
        var clients = options.container.get('clients');
        //var cookie = connect.utils.parseCookie(socket.request.headers.cookie);

        console.log('new client connected - ' + socket.id);
        console.log(socket.request.user);
        /*
         var connect = require('connect');
         io.on('connection', function(socket_client) {
         var cookie_string = socket_client.request.headers.cookie;
         var parsed_cookies = connect.utils.parseCookie(cookie_string);
         var connect_sid = parsed_cookies['connect.sid'];
         if (connect_sid) {
         session_store.get(connect_sid, function (error, session) {
         //HOORAY NOW YOU'VE GOT THE SESSION OBJECT!!!!
         });
         }
         });
         */
    });
};
