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