/**
 * load modules
 */
var logger = require('morgan');
var cookieParser = require('cookie-parser');
var bodyParser = require('body-parser');
var path = require('path');
//var favicon = require('serve-favicon');

var express = require('express');
var session = require('express-session');
var validator = require('express-validator');

var mongoose = require('mongoose');

var passport = require('passport');
var flash = require('connect-flash');
var connectMongo = require('connect-mongo')(session);

var socketIo = require('socket.io');
var passportSocketIo = require('passport.socketio');


/**
 * app start
 */
var app = express();


/**
 * config
 */
app.property = require('./config/properties')[app.get('env')];


/**
 * db connect
 */
mongoose.connect(app.property.mongoose);


/**
 * session store
 */
var sessionStore = new connectMongo({mongooseConnection: mongoose.connection});


/**
 * define model container
 */
var modelContainer = require('./support/modelFactory');
var ModelFactory = new modelContainer(mongoose, __dirname + '/models/');


/**
 * passport
 */
require('./support/passport')(passport, ModelFactory);


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
app.use(bodyParser.urlencoded({extended: false}));
app.use(cookieParser());
app.use('/static', express.static(path.join(__dirname, 'public/static')));
app.use(validator());


/**
 * required for passport
 */
app.use(session({
    secret: app.property.sessionKey,
    resave: false,
    saveUninitialized: true,
    store: sessionStore
}));
app.use(passport.initialize());
app.use(passport.session());
app.use(flash());


/**
 * socket.io
 */
var io = socketIo();
io.use(passportSocketIo.authorize({
    cookieParser: cookieParser,
    key: app.property.cookieKey,
    secret: app.property.sessionKey,
    store: sessionStore
}));
app.io = io;


/**
 * container
 */
var container = require('./support/container');
var Container = new container();


/**
 * service
 */
var service = require('./support/service');
Container.set('service', new service());


/**
 * util
 */
var util = require('./support/util');
util.setGameConfig(require('./config/game'));
util.setItemConfig(require('./config/items'));
Container.set('util', util);


/**
 * socket.io
 */
require('./sockets')(io, {
    models: ModelFactory,
    container: Container,
    passport: passport
});


/**
 * routes
 */
require('./routes')(app, {
    models: ModelFactory,
    container: Container,
    passport: passport
});


/**
 * catch 404
 */
app.use(function (req, res, next) {
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
    app.use(function (err, req, res, next) {
        res.status(err.status || 500);
        res.render('error', {
            message: err.message,
            error: err
        });
    });
} else {
    // production error handler
    // no stack-traces leaked to user
    app.use(function (err, req, res, next) {
        res.status(err.status || 500);
        res.render('error', {
            message: err.message,
            error: {}
        });
    });
}


/**
 * initialize service
 */
Container.get('service').initialize(
    ModelFactory.getModel('group'),
    ModelFactory.getModel('place'),
    ModelFactory.getModel('server'),
    ModelFactory.getModel('news'),
    ModelFactory.getModel('user'),
    ModelFactory.getModel('winner'),
    Container.get('util'),
    io
);


module.exports = app;