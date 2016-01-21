function signupRender(req, res, properties, validationError, bodies) {
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
        gameIcons: properties.icons,
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
    var util = options.container.get('util');

    app.get('/', function (req, res) {
        res.render('login', {message: req.flash('error')});
    });

    app.post('/', function (req, res, next) {
        options.passport.authenticate(
            'local',
            function (err, user, info) {
                if (err) {
                    return next(err);
                } else if (!user) {
                    req.flash('error', info.message);
                    return res.redirect('/');
                } else if (user && typeof info !== 'undefined') {
                    req.logIn(user, function(err) {
                        if (err) {
                            return next(err);
                        } else {
                            return res.redirect('/gameover');
                        }
                    });
                } else if (user) {
                    req.logIn(user, function(err) {
                        if (err) {
                            return next(err);
                        } else {
                            return res.redirect('/game');
                        }
                    });
                }
            }
        )(req, res, next);
    });

    app.get('/logout', function (req, res) {
        req.logout();
        res.redirect('/');
    });

    app.get('/signup', function (req, res) {
        var ip = req.headers['x-forwarded-for'] || req.connection.remoteAddress;
        var util = options.container.get('util');
        options.container.get('service').checkSignup(
            options.repositories,
            ip,
            options.container.get('properties').respawnTime,
            options.container.get('properties').maxRecruitTime,
            options.container.get('properties').maxRecruitMember,
            function (err, status, opts) {
                if (-1 === status) {
                    errorRender(res, '프로그램의 접수는 종료되었습니다.\n다음 프로그램 시작을 기다려주세요.');
                } else if (-2 === status) {
                    errorRender(res, '죄송합니다만, 정원(' + options.container.get('properties').maxRecruitMember + '명) 오버입니다.');
                } else if (-3 === status) {
                    errorRender(res, '캐릭터가 사망한 후, 1분이 지나야 재등록할 수 있습니다.\n\n등록가능시간：' + opts.rebornTime);
                } else if (-4 === status) {
                    errorRender(res, '캐릭터의 중복등록은 금지되어 있습니다.\n관리자에게 문의하세요.');
                } else {
                    signupRender(req, res, options.container.get('properties'));
                }
            }
        );
    });

    app.post('/signup', function (req, res) {
        var ip = req.headers['x-forwarded-for'] || req.connection.remoteAddress;
        var util = options.container.get('util');
        options.container.get('service').validSignup(
            options.repositories,
            ip,
            options.container.get('properties').respawnTime,
            options.container.get('properties').maxRecruitTime,
            options.container.get('properties').maxRecruitMember,
            options.container.get('properties').maxGroups,
            options.container.get('properties').groupPerMan,
            options.container.get('properties').icons,
            req,
            require('../forms/signup'),
            function (err, status, opts) {
                if (-1 === status) {
                    errorRender(res, '프로그램의 접수는 종료되었습니다.\n다음 프로그램 시작을 기다려주세요.');
                } else if (-2 === status) {
                    errorRender(res, '죄송합니다만, 정원(' + options.container.get('properties').maxRecruitMember + '명) 오버입니다.');
                } else if (-3 === status) {
                    errorRender(res, '캐릭터가 사망한 후, 2시간이 지나야 재등록할 수 있습니다.\n\n등록가능시간：' + opts.rebornTime);
                } else if (-4 === status) {
                    errorRender(res, '캐릭터의 중복등록은 금지되어 있습니다.\n관리자에게 문의하세요.');
                } else if (-5 === status) {
                    signupRender(req, res, options.container.get('properties'), opts, req.body);
                } else if (-6 === status) {
                    req.flash('error', '성별과 다른 아이콘을 선택했습니다.');
                    signupRender(req, res, options.container.get('properties'), {}, req.body);
                } else if (-7 === status) {
                    req.flash('error', '남학생은 더 이상 등록할 수 없습니다.');
                    signupRender(req, res, options.container.get('properties'), {}, req.body);
                } else if (-8 === status) {
                    req.flash('error', '여학생은 더 이상 등록할 수 없습니다.');
                    signupRender(req, res, options.container.get('properties'), {}, req.body);
                } else {
                    var clubs = options.container.get('properties').clubs;
                    var supplyWeapon = options.container.get('items').getRandomSupply();
                    var personalItem = options.container.get('items').getRandomPersonal();
                    var clubId = util.dice(clubs.length - 1);
                    var clubName = clubs[clubId];
                    var skillMap = util.getSkillByClubId(clubId, options.container.get('properties').expPerSkillLevel);
                    var mergeItems = util.appendSupplyItem(supplyWeapon, personalItem);
                    var armorBody = util.setItemObject('armor41', 30, 5);
                    if (1 == req.body.userGender) {
                        armorBody = util.setItemObject('armor42', 30, 5);
                    }

                    options.container.get('service').signup(
                        options.passport,
                        options.repositories,
                        ip,
                        req,
                        res,
                        util.getPoint(
                            options.container.get('properties').attack,
                            options.container.get('properties').attackMaxIncrease
                        ),
                        util.getPoint(
                            options.container.get('properties').defence,
                            options.container.get('properties').defenceMaxIncrease
                        ),
                        util.getPoint(
                            options.container.get('properties').health,
                            options.container.get('properties').healthMaxIncrease
                        ),
                        options.container.get('properties').maxStamina,
                        options.container.get('properties').expPerLevel + options.container.get('properties').expIncrease,
                        opts.groupName,
                        (opts.groupCount + 1),
                        clubId,
                        clubName,
                        skillMap,
                        util.setItemObject('weaponDefault', 0, 0),
                        {
                            head: util.setItemEmpty(),
                            body: armorBody,
                            arm: util.setItemEmpty(),
                            foot: util.setItemEmpty(),
                            accessory: util.setItemEmpty()
                        },
                        mergeItems
                    );
                }
            }
        );
    });
};