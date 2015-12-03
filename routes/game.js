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
    app.get('/intro', isLoggedIn, function(req, res){
        res.send('intro');
    });

    app.get('/intro2', isLoggedIn, function(req, res){
        res.send('intro2');
    });

    app.get('/game', isLoggedIn, function(req, res){
        res.render('game', {user:req.user, angularMode:true});
    });
};