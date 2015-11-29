/**
 * Created by monoless on 2015. 11. 29..
 */
module.exports = function (req, userId, password, done) {
    process.nextTick(function () {
        /*
        function (req, res) {
            req.checkBody(require(appRoot + '/forms/signup')(req.body.password));

            // validate
            var errors = req.validationErrors();
            if (errors) {
                var errorMessages = [];
                for (var i in errors) {
                    errorMessages.push(errors[i].msg);
                }

                req.flash('signupMessage', errorMessages)
                res.redirect('/signup');
            } else {

            }
        }
        */
        // validate errors
        //req.checkBody(require(appRoot + '/'))

        return done(
            null,
            false,
            req.flash('signupMessage', '테스트.')
        );
        /*
        User.findOne({'userId': userId}, function (err, user) {
            if (err) {
                return done(err);
            }

            if (user) {
                return done(
                    null,
                    false,
                    req.flash('signupMessage', '같은 아이디의 캐릭터가 이미 존재합니다.')
                );
            } else {
                var newUser = new User();
                newUser.userId = userId;
                newUser.password = newUser.generateHash(password);
                newUser.registerAt = new Date();

                newUser.save(function (err) {
                    if (err) {
                        throw err;
                    }

                    return done(null, newUser);
                });
            }
        });
        */
    });
};
