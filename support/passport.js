/**
 * Created by monoless on 2015-11-23.
 */
var LocalStrategy = require('passport-local').Strategy;

module.exports = function (passport, modelContainer) {
    var User = modelContainer.getModel('user');

    passport.use(new LocalStrategy(
        function (username, password, done) {
            var authenticate = User.authenticate();
            authenticate(username, password, function (err, user, validate) {
                if (err) {
                    return done(err);
                } else if (!user) {
                    return done(null, false, {status: 'auth_failed', message: validate.message});
                } else {
                    return done(null, user);
                }
            });
        }
    ));
    passport.serializeUser(User.serializeUser());
    passport.deserializeUser(User.deserializeUser());
};