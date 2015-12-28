/**
 * Created by monoless on 2015-11-23.
 */
var LocalStrategy = require('passport-local').Strategy;

module.exports = function (passport, modelContainer) {
    var userModel = modelContainer.getModel('user');
    var serverModel = modelContainer.getModel('server');

    passport.use(new LocalStrategy(
        function (username, password, done) {
            var authenticate = userModel.authenticate();
            authenticate(username, password, function (err, user, validate) {
                if (err) {
                    return done(err);
                } else if (!user) {
                    return done(null, false, {status: 'auth_failed', message: validate.message});
                } else if (0 >= user.health) {
                    return done(null, user, {status: 'died'});
                } else {
                    return done(null, user);
                }
            });
        }
    ));
    passport.serializeUser(userModel.serializeUser());
    passport.deserializeUser(userModel.deserializeUser());
};