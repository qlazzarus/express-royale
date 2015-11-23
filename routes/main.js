/**
 * Created by monoless on 2015-11-20.
 */
function isLoggedIn(req, res, next){
    if (req.isAuthenticated()) {
        return next();
    }

    res.redirect('/');
}

module.exports = function(app, options){
    app.get('/', function(req, res, next){
        res.render('index');
    });

    app.get('/game', isLoggedIn, function(req, res, next){
        res.render('game', {user:req.user, angularMode:true});
    });

    app.get('/profile', isLoggedIn, function(req, res){
        res.render('profile', {user:req.user});
    });
};