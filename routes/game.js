/**
 * Created by monoless on 2015-11-20.
 */
function isLoggedIn(req, res, next) {
    if (req.isAuthenticated()) {
        return next();
    }

    res.redirect('/');
}

module.exports = function (app, options) {
    var util = options.container.get('util');

    app.get('/intro', isLoggedIn, function (req, res) {
        res.render('intro', {user: req.user});
    });

    app.get('/intro2', isLoggedIn, function (req, res) {
        res.render('intro2', {user: req.user});
    });

    app.get('/game', isLoggedIn, function (req, res) {
        res.render('game', {user: req.user, angularMode: true});
    });

    app.get('/gameover', isLoggedIn, function (req, res) {
        var serverModel = options.models.getModel('server');
        serverModel.findOne({}, function (err, server) {
            if (err) {
                console.log(err);
                next();
            } else {
                if (0 >= req.user.health) {
                    res.render('error', {
                        message: '에러발생',
                        error: {
                            status: [
                                '이미 죽어있습니다.\n',
                                '사인：',
                                util.getDeathCauseMessage(req.user.deathCause),
                                '\n<strong style="color:#00ff00;">',
                                req.user.messageDying,
                                '</strong>'
                            ].join('')
                        }
                    });

                } else if ('hackingSuccess' === server.status && req.user.username == server.winner) {
                    res.render('endingHacking');

                } else if ('hackingSuccess' === server.status) {
                    res.render('endingHackingAlternative');

                } else if ('ending' === server.status && req.user.username == server.winner) {
                    res.render('ending', {user: req.user});

                } else {
                    res.redirect('/game');

                }
            }
        });
    });
};