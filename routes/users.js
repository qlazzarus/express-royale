function signupRender(req, res, app, validationError, bodies) {
    var errors = {};
    if (typeof validationError !== 'undefined') {
        for (var currentError in validationError) {
            errors[currentError.param] = currentError.msg;
        }
    }

    if (typeof bodies == 'undefined') {
        bodies = {};
    }

    console.log(errors);

    res.render('signup', {
        message: req.flash('error'),
        gameIcons: app.property.gameIcons,
        errors: errors,
        bodies: bodies
    });
}

module.exports = function (app, options) {
    var User = options.models.getModel('user');

    app.get('/', function (req, res) {
        res.render('login', {message: req.flash('error')});
    });

    app.post('/', options.passport.authenticate('local', {
        successRedirect: '/game',
        failureRedirect: '/',
        failureFlash: true
    }));

    app.get('/logout', function (req, res) {
        req.logout();
        res.redirect('/');
    });

    app.get('/signup', function (req, res) {
        signupRender(req, res, app);
    });

    app.post('/signup', function (req, res) {
        req.checkBody(require('../forms/signup')(req.body.password));

        // validate
        var validStatus = true;
        var errors = req.validationErrors();
        if (errors) {
            validStatus = false;
        }

        //
        if (true !== validStatus) {
            signupRender(req, res, app, errors, req.body);
        } else {
            res.send('hello');
        }
    });
};