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
        options.container.get('service').checkSignup(
            options.models.getModel('user'),
            options.models.getModel('server'),
            ip,
            app.gameConfig.respawnTime,
            app.gameConfig.maxRecruitTime,
            app.gameConfig.maxRecruitMember,
            function (err, status, opts) {
                if (-1 === status) {
                    errorRender(res, '프로그램의 접수는 종료되었습니다.\n다음 프로그램 시작을 기다려주세요.');
                } else if (-2 === status) {
                    errorRender(res, '죄송합니다만, 정원(' + app.gameConfig.maxRecruitMember + '명) 오버입니다.');
                } else if (-3 === status) {
                    errorRender(res, '캐릭터가 사망한 후, 2시간이 지나야 재등록할 수 있습니다.\n\n등록가능시간：' + opts.rebornTime);
                } else if (-4 === status) {
                    errorRender(res, '캐릭터의 중복등록은 금지되어 있습니다. 관리자에게 문의하세요.');
                } else {
                    signupRender(req, res, app);
                }
            }
        );
    });

    app.post('/signup', function (req, res) {
        var ip = req.headers['x-forwarded-for'] || req.connection.remoteAddress;
        options.container.get('service').validSignup(
            options.models.getModel('user'),
            options.models.getModel('server'),
            options.models.getModel('group'),
            ip,
            app.gameConfig.respawnTime,
            app.gameConfig.maxRecruitTime,
            app.gameConfig.maxRecruitMember,
            app.gameConfig.maxGroups,
            app.gameConfig.groupPerMan,
            app.gameConfig.icons,
            req,
            require('../forms/signup'),
            function (err, status, opts) {
                if (-1 === status) {
                    errorRender(res, '프로그램의 접수는 종료되었습니다.\n다음 프로그램 시작을 기다려주세요.');
                } else if (-2 === status) {
                    errorRender(res, '죄송합니다만, 정원(' + app.gameConfig.maxRecruitMember + '명) 오버입니다.');
                } else if (-3 === status) {
                    errorRender(res, '캐릭터가 사망한 후, 2시간이 지나야 재등록할 수 있습니다.\n\n등록가능시간：' + opts.rebornTime);
                } else if (-4 === status) {
                    errorRender(res, '캐릭터의 중복등록은 금지되어 있습니다. 관리자에게 문의하세요.');
                } else if (-5 === status) {
                    signupRender(req, res, app, options, req.body);
                } else if (-6 === status) {
                    req.flash('error', '성별과 다른 아이콘을 선택했습니다.');
                    signupRender(req, res, app, {}, req.body);
                } else if (-7 === status) {
                    req.flash('error', '남학생은 더 이상 등록할 수 없습니다.');
                    signupRender(req, res, app, {}, req.body);
                } else if (-8 === status) {
                    req.flash('error', '여학생은 더 이상 등록할 수 없습니다.');
                    signupRender(req, res, app, {}, req.body);
                } else {
                    var supplyWeapon = options.container.get('util').getRandomItem(app.gameConfig.supplyItems, app.gameConfig.items);
                    var personalItem = options.container.get('util').getRandomItem(app.gameConfig.personalItems, app.gameConfig.items);
                    var clubId = options.container.get('util').dice(app.gameConfig.clubs.length);
                    var clubName = app.gameConfig.clubs[clubId];
                    var skillMap = options.container.get('util').getSkillByClubId(clubId, app.gameConfig.expPerSkillLevel);
                    var mergeItems = options.container.get('util').appendSupplyItem(supplyWeapon, personalItem);
                    var armorBody = {id:'armor41', point:5, endurance:30};
                    if (1 == req.body.userGender) {
                        armorBody.id = 'armor42';
                    }

                    options.container.get('service').signup(
                        options.models.getModel('user'),
                        ip,
                        req,
                        res,
                        options.container.get('util').getPoint(app.gameConfig.attack, app.gameConfig.attackMaxIncrease),
                        options.container.get('util').getPoint(app.gameConfig.defence, app.gameConfig.defenceMaxIncrease),
                        options.container.get('util').getPoint(app.gameConfig.health, app.gameConfig.healthMaxIncrease),
                        app.gameConfig.maxStamina,
                        app.gameConfig.expPerLevel + app.gameConfig.expIncrease,
                        opts.groupName,
                        opts.groupCount++,
                        clubName,
                        skillMap,
                        armorBody,
                        mergeItems
                    );
                }
            }
        );
    });
};