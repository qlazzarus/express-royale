module.exports = function (app, options) {
    app.get('/login', function (req, res) {
        res.render('login', {message: req.flash('loginMessage')});
    });

    app.get('/signup', function (req, res) {
        res.render('signup', {message: req.flash('signupMessage')});
    });

    app.get('/logout', function (req, res) {
        req.logout();
        res.redirect('/');
    });

    app.post('/login', options.passport.authenticate('local-login', {
        successRedirect: '/profile', // redirect to the secure profile section
        failureRedirect: '/login', // redirect back to the signup page if there is an error
        failureFlash: true // allow flash messages
    }));

    app.post('/signup', function (req, res) {
        req.assert('email', 'E-Mail Required').notEmpty();
        req.assert('email', 'Invalid Email').isEmail();
        req.assert('password', 'Password Required').notEmpty();
        req.assert('password', 'Password Invalid').isLength(2, 10);
        req.assert('passwordConfirm', 'Password Confirm Required').notEmpty();
        req.assert('passwordConfirm', 'Password Confirm Invalid').isLength(2, 10);
        req.assert('passwordConfirm', 'Password Not Equal').equals(req.body.password);

        // validate
        var errors = req.validationErrors();
        if (errors) {
            var errorMessages = [];
            for (var i in errors) {
                errorMessages.push(errors[i].msg);
            }

            res.render('signup', {message: errorMessages});
        } else {
            options.passport.authenticate('local-signup', {
                successRedirect: '/profile', // redirect to the secure profile section
                failureRedirect: '/signup', // redirect back to the signup page if there is an error
                failureFlash: true // allow flash messages
            })(req, res);
        }
    });
};