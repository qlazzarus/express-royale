module.exports = function (app, options) {
    //var User = require(appRoot + '/models/user')(options.mongoose);

    app.get('/', function (req, res) {
        res.render('login', {message: req.flash('loginMessage')});
    });

    app.post('/', options.passport.authenticate('local-login', {
        successRedirect: '/game',
        failureRedirect: '/',
        failureFlash: true
    }));

    app.get('/logout', function (req, res) {
        req.logout();
        res.redirect('/');
    });

    app.get('/signup', function (req, res) {
        res.render('signup', {message: req.flash('signupMessage'), 'gameIcons': app.property.gameIcons});
    });

    app.post('/signup', options.passport.authenticate('local-signup', {
        successRedirect: '/game',
        failureRedirect: '/signup',
        failureFlash: true
    }));
};