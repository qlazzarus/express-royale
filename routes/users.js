module.exports = function (app, options) {
    app.get('/login', function (req, res) {
        res.render('login', {message: req.flash('loginMessage')});
    });

    app.get('/signup', function (req, res) {
        res.render('signup', {message: req.flash('signupMessage')});
    });

    app.get('/logout', function(req, res) {
        req.logout();
        res.redirect('/');
    });

    app.post('/login', options.passport.authenticate('local-login', {
        successRedirect : '/profile', // redirect to the secure profile section
        failureRedirect : '/login', // redirect back to the signup page if there is an error
        failureFlash : true // allow flash messages
    }));

    app.post('/signup', options.passport.authenticate('local-signup', {
        successRedirect : '/profile', // redirect to the secure profile section
        failureRedirect : '/signup', // redirect back to the signup page if there is an error
        failureFlash : true // allow flash messages
    }));
};