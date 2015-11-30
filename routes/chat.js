/**
 * Created by monoless on 2015-11-20.
 */
var messageLimit = 10;

function isLoggedIn(req, res, next){
    if (req.isAuthenticated()) {
        return next();
    }

    res.status(401).send('Authenticate Require');
}

module.exports = function(app, options){
    /*
    var Message = require('./../models/chat')(options.mongoose);

    app.get('/message', isLoggedIn, function(req, res, next){
        Message.find({}).limit(messageLimit).exec(function (err, allMessages) {
            if (err) {
                return res.send(err);
            } else {
                res.send(allMessages);
            }
        });
    });

    app.post('/message', isLoggedIn, function(req, res, next){
        var message = new Message({
            userId:req.user._id,
            userName:req.user.local.email,
            message:req.body.message
        });

        message.save(function(err, saved){
            if (err) {
                res.send(500);
                return console.log('error saving to db');
            } else {
                res.send(saved);
                options.io.sockets.emit('broadcastMessage', saved);
            }
        });
    });
    */
};