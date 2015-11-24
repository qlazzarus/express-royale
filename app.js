/**
 * load modules
 */
var express     = require('express');
var mongoose    = require('mongoose');
var passport    = require('passport');
var flash       = require('connect-flash');
var socketIo    = require('socket.io');

var logger          = require('morgan');
var cookieParser    = require('cookie-parser');
var bodyParser      = require('body-parser');
var session         = require('express-session');
var path            = require('path');
//var favicon = require('serve-favicon');


/**
 * app start
 */
var app         = express();


/**
 * config
 */
var properties = require('./config/properties.js');
var currentProperties = properties[app.get('env')];


/**
 * db connect
 */
mongoose.connect(currentProperties.mongoose);


/**
 * socket.io
 */
var io = socketIo();
app.io = io;


/**
 * passport
 */
require('./config/passport')(passport, mongoose);


/**
 * view engine setup
 */
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'jade');


/**
 * set up express application
 */
// uncomment after placing your favicon in /public
//app.use(favicon(path.join(__dirname, 'public', 'favicon.ico')));
app.use(logger('dev'));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));


/**
 * required for passport
 */
app.use(session({
    secret: currentProperties.sessionKey,
    resave: false,
    saveUninitialized: true
}));
app.use(passport.initialize());
app.use(passport.session());
app.use(flash());


/**
 * events
 */
require('./events')(io, {
    mongoose:mongoose,
    passport:passport
});


/**
 * routes
 */
require('./routes')(app, {
    mongoose:mongoose,
    passport:passport,
    io:io
});


/**
 * catch 404
 */
app.use(function(req, res, next) {
    var err = new Error('Not Found');
    err.status = 404;
    next(err);
});


/**
 * catch 500
 */
if (app.get('env') === 'development') {
    // development error handler
    // will print stack-trace
    app.use(function(err, req, res, next) {
        res.status(err.status || 500);
        res.render('error', {
            message: err.message,
            error: err
        });
    });
} else {
    // production error handler
    // no stack-traces leaked to user
    app.use(function(err, req, res, next) {
        res.status(err.status || 500);
        res.render('error', {
            message: err.message,
            error: {}
        });
    });
}


module.exports = app;