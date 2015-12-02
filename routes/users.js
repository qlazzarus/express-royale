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
    var async = require('async');

    var User = options.models.getModel('user');
    var ServerFlag = options.models.getModel('server');

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
        var ip = req.headers['x-forwarded-for'] || req.connection.remoteAddress;

        async.parallel({
            userCountAll: function (cb){ User.count({}).exec(cb); },
            userFindByIp: function (cb){ User.find({ip:ip}).exec(cb); },
            flag: function (cb){ ServerFlag.findOne({}).exec(cb); }
        }, function(err, result) {
            if (err) {
                throw err;
            }

            if (!result.flag) {
                result.flag = new ServerFlag({
                    status: 'start',
                    started: new Date()
                });

                result.flag.save(function (err) {
                    throw err;
                });
            }

            var dateDiff = Date.now() - new Date(result.flag.started).getTime();
            var isExist = false;
            var isDead = false;
            var rebornTime = new Date();

            for (var i = 0; result.userFindByIp.length; i++) {
                var current = result.userFindByIp[i];
                if (0 >= current.hp && app.gameConfig.respawnTime > Date.now() - new Date(current.deadAt).getTime()) {
                    isExist = false;
                    isDead = false;
                } else if (0 >= current.hp) {
                    isExist = true;
                    isDead = true;
                    rebornTime = current.deadAt;
                    break;
                } else {
                    isExist = true;
                    break;
                }
            }

            if ('start' !== result.flag.status || app.gameConfig.maxRecruitTime < dateDiff) {
                errorRender(res, '프로그램의 접수는 종료되었습니다.\n다음 프로그램 시작을 기다려주세요.');
            } else if (app.gameConfig.maxRecruitMember <= result.userCountAll) {
                errorRender(res, '죄송합니다만, 정원(' + app.gameConfig.maxRecruitMember + '명) 오버입니다.');
            } else if (true === isExist && true === isDead) {
                errorRender(res, '캐릭터가 사망한 후, 2시간이 지나야 재등록할 수 있습니다.\n\n등록가능시간：' + rebornTime);
            } else if (true === isExist && true === isDead) {
                errorRender(res, '캐릭터의 중복등록은 금지되어 있습니다. 관리자에게 문의하세요.');
            } else {
                signupRender(req, res, app);
            }
        });
    });

    app.post('/signup', function (req, res) {
        var ip = req.headers['x-forwarded-for'] || req.connection.remoteAddress;
        var validStatus = true;

        // validate form
        req.checkBody(require('../forms/signup')(req.body.password));
        var errors = req.validationErrors();
        if (errors) {
            validStatus = false;
        }

        // 아이콘 성별 체크
        if (true === validStatus) {
            var icon = {};
            var iconLength = app.gameConfig.icons;
            for (var i = 0; i < iconLength; i++) {
                icon = app.gameConfig.icons[i];
                if (icon.path === req.body.userIcon) {
                    break;
                }
            }

            if (0 == req.body.userGender && 'male' !== icon.gender) {
                errors = [{param:'userGender', msg:'성별과 다른 아이콘을 선택했습니다.'}];
                validStatus = false;
            }
        }

        // result
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
                registerAt: currentDate,
                status: '정상',
                ip: ip
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