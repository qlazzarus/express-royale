/**
 * Created by monoless on 2015. 11. 29..
 */
module.exports = function (req, userId, password, done){
    /*
    User.findOne({'userId':userId}, function(err, user){
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
    */
}
