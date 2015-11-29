/**
 * Created by monoless on 2015-11-23.
 */
var LocalStrategy = require('passport-local').Strategy;

module.exports = function (passport, mongoose) {
    var User = require(appRoot + '/models/user')(mongoose);

    passport.serializeUser(function (user, done) {
        done(null, user.id);
    });

    passport.deserializeUser(function (id, done) {
        User.findById(id, function (err, user) {
            done(err, user);
        });
    });

    passport.use(
        'local-signup',
        new LocalStrategy(
            {
                usernameField: 'userId',
                passwordField: 'password',
                passReqToCallback: true
            },
            require('./signup')
        )
    );

    passport.use(
        'local-login',
        new LocalStrategy(
            {
                usernameField: 'userId',
                passwordField: 'password',
                passReqToCallback: true
            },
            require('./login')
        )
    );
};