function signupRender(req, res, app, validationError, bodies) {
    var errors = {};
    if (typeof validationError !== 'undefined') {
        for (var i in validationError) {
            errors[validationError[i].param] = validationError[i].msg;
        }
    }

    if (typeof bodies == 'undefined') {
        bodies = {};
    }

    res.render('signup', {
        message: req.flash('error'),
        gameIcons: app.gameConfig.icons,
        errors: errors,
        bodies: bodies
    });
}

function errorRender(res, errorMessage) {
    res.render('error', {
        message: '에러발생',
        error: {
            status: errorMessage,
            stack: ''
        }
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
        options.socket.emit('serverStatus');
        options.socket.on('serverStatusResponse', function(flag){
            console.log(flag);
            var dateDiff = Date.now() - new Date(flag.started).getTime();
            if ('start' !== flag.status || app.gameConfig.maxRecruitTime < dateDiff) {
                errorRender(res, '프로그램의 접수는 종료되었습니다.\n다음 프로그램 시작을 기다려주세요.');
            } else {
                signupRender(req, res, app);
            }
        });
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
            var currentDate = new Date();

            User.register(new User({
                username: req.body.username,
                userGender: req.body.userGender,
                userIcon: req.body.userIcon,
                message: req.body.message,
                messageDying: req.body.messageDying,
                messageComment: req.body.messageComment,
                loggedAt: currentDate,
                registerAt: currentDate
            }), req.body.password, function (err, user) {
                if (err) {
                    res.flash('error', err.message);
                    res.redirect('/signup');
                } else {
                    res.redirect('/game');
                }
            });
        }
    });
};