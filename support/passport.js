/**
 * Created by monoless on 2015-11-23.
 */
var LocalStrategy = require('passport-local').Strategy;

module.exports = function (passport, repositories) {
    passport.use(new LocalStrategy(
        function (username, password, done) {
            var authenticate = repositories.authenticateUser();
            authenticate(username, password, function (err, user, validate) {
                repositories.getServerFlag(function(server){
                    if (err) {
                        return done(err);
                    } else if (!user) {
                        return done(null, false, {status: 'auth_failed', message: validate.message});
                    } else if (0 >= user.health) {
                        return done(null, user, {status: 'died'});
                    } else if (-1 !== ['hackingSuccess', 'ending'].indexOf(server.status)) {
                        return done(null, user, {status: server.status});
                    } else {
                        return done(null, user);
                    }
                });
            });
        }
    ));

    passport.serializeUser(repositories.serializeUser());
    passport.deserializeUser(repositories.deserializeUser());
};