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
                if ('hackingSuccess' === server.status && req.user.username == server.winner) {
                    res.render('endingHacking');
                } else if ('hackingSuccess' === server.status) {
                    res.render('endingHackingAlternative');
                } else if ('ending' === server.status && req.user.username == server.winner) {
                    res.render('ending', {user: req.user});
                } else if (0 >= req.user.health) {
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
                } else {
                    res.redirect('/game');
                }
            }
        });
    });

    app.get('/rank', function (req, res, next) {
        var userModel = options.models.getModel('user');
        userModel.find({npc: false}, function (err, users) {
            if (err) {
                console.log(err);
                next();
            } else {
                var survivors = [];
                for (var i in users) {
                    var user = users[i];
                    if (0 < user.health) {
                        survivors.push(user);
                    }
                }

                res.render('rank', {survivors: survivors, survivorCount: survivors.length, userCount: users.length});
            }
        });
    });
};