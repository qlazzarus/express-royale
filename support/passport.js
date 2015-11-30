/**
 * Created by monoless on 2015-11-23.
 */
var LocalStrategy = require('passport-local').Strategy;

module.exports = function (passport, modelContainer) {
    var User = modelContainer.getModel('user');

    passport.use(new LocalStrategy(User.authenticate()));
    passport.serializeUser(User.serializeUser());
    passport.deserializeUser(User.deserializeUser());
};