/**
 * Created by monoless on 2015-11-23.
 */
var LocalStrategy = require('passport-local').Strategy;

module.exports = function (passport, mongoose) {
    var User = require('../models/user')(mongoose);

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
                usernameField: 'email',
                passwordField: 'password',
                passReqToCallback: true
            },
            function (req, email, password, done) {
                process.nextTick(function () {
                    User.findOne({'local.email': email}, function (err, user) {
                        if (err) {
                            return done(err);
                        }

                        if (user) {
                            return done(
                                null,
                                false,
                                req.flash('signupMessage', 'That email is already taken.')
                            );
                        } else {
                            var newUser = new User();
                            newUser.local.email = email;
                            newUser.local.password = newUser.generateHash(password);
                            newUser.registerAt = new Date();

                            newUser.save(function (err) {
                                if (err) {
                                    throw err;
                                }

                                return done(null, newUser);
                            });
                        }
                    });
                });
            }
        )
    );

    passport.use(
        'local-login',
        new LocalStrategy(
            {
                usernameField: 'email',
                passwordField: 'password',
                passReqToCallback: true
            },
            function(req, email, password, done){
                User.findOne({'local.email':email}, function(err, user){
                    if (err) {
                        return done(err);
                    } else if (!user) {
                        return done(
                            null,
                            false,
                            req.flash('loginMessage', 'No user found.')
                        );
                    } else if (!user.validPassword(password)) {
                        return done(
                            null,
                            false,
                            req.flash('loginMessage', 'Wrong Password.')
                        );
                    } else {
                        user.loggedAt = new Date();
                        user.save(function (err) {
                            if (err) {
                                throw err;
                            }

                            return done(null, user);
                        });
                    }
                });
            }
        )
    );
};