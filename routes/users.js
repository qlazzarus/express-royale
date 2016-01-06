function signupRender(req, res, util, validationError, bodies) {
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
        gameIcons: util.getIcons(),
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
            options.models.getModel('user'),
            options.models.getModel('server'),
            ip,
            util.getRespawnTime(),
            util.getMaxRecruitTime(),
            util.getMaxRecruitMember(),
            function (err, status, opts) {
                if (-1 === status) {
                    errorRender(res, '프로그램의 접수는 종료되었습니다.\n다음 프로그램 시작을 기다려주세요.');
                } else if (-2 === status) {
                    errorRender(res, '죄송합니다만, 정원(' + util.getMaxRecruitMember() + '명) 오버입니다.');
                } else if (-3 === status) {
                    errorRender(res, '캐릭터가 사망한 후, 1분이 지나야 재등록할 수 있습니다.\n\n등록가능시간：' + opts.rebornTime);
                } else if (-4 === status) {
                    errorRender(res, '캐릭터의 중복등록은 금지되어 있습니다.\n관리자에게 문의하세요.');
                } else {
                    signupRender(req, res, util);
                }
            }
        );
    });

    app.post('/signup', function (req, res) {
        var ip = req.headers['x-forwarded-for'] || req.connection.remoteAddress;
        var util = options.container.get('util');
        options.container.get('service').validSignup(
            options.models.getModel('user'),
            options.models.getModel('server'),
            options.models.getModel('group'),
            ip,
            util.getRespawnTime(),
            util.getMaxRecruitTime(),
            util.getMaxRecruitMember(),
            util.getMaxGroups(),
            util.getGroupPerMan(),
            util.getIcons(),
            req,
            require('../forms/signup'),
            function (err, status, opts) {
                if (-1 === status) {
                    errorRender(res, '프로그램의 접수는 종료되었습니다.\n다음 프로그램 시작을 기다려주세요.');
                } else if (-2 === status) {
                    errorRender(res, '죄송합니다만, 정원(' + util.getMaxRecruitMember() + '명) 오버입니다.');
                } else if (-3 === status) {
                    errorRender(res, '캐릭터가 사망한 후, 2시간이 지나야 재등록할 수 있습니다.\n\n등록가능시간：' + opts.rebornTime);
                } else if (-4 === status) {
                    errorRender(res, '캐릭터의 중복등록은 금지되어 있습니다.\n관리자에게 문의하세요.');
                } else if (-5 === status) {
                    signupRender(req, res, util, opts, req.body);
                } else if (-6 === status) {
                    req.flash('error', '성별과 다른 아이콘을 선택했습니다.');
                    signupRender(req, res, util, {}, req.body);
                } else if (-7 === status) {
                    req.flash('error', '남학생은 더 이상 등록할 수 없습니다.');
                    signupRender(req, res, util, {}, req.body);
                } else if (-8 === status) {
                    req.flash('error', '여학생은 더 이상 등록할 수 없습니다.');
                    signupRender(req, res, util, {}, req.body);
                } else {
                    var supplyWeapon = util.getRandomItem(util.getSupplyItems());
                    var personalItem = util.getRandomItem(util.getPersonalItems());
                    var clubId = util.dice(util.getClubs().length - 1);
                    var clubName = util.getClubs()[clubId];
                    var skillMap = util.getSkillByClubId(clubId);
                    var mergeItems = util.appendSupplyItem(supplyWeapon, personalItem);
                    var armorBody = {idx: 'armor41', point: 5, endurance: 30};
                    if (1 == req.body.userGender) {
                        armorBody.idx = 'armor42';
                    }

                    options.container.get('service').signup(
                        options.passport,
                        options.models.getModel('user'),
                        options.models.getModel('group'),
                        options.models.getModel('news'),
                        ip,
                        req,
                        res,
                        util.getPoint(util.getAttack(), util.getAttackMaxIncrease()),
                        util.getPoint(util.getDefence(), util.getDefenceMaxIncrease()),
                        util.getPoint(util.getHealth(), util.getHealthMaxIncrease()),
                        util.getMaxStamina(),
                        util.getExpPerLevel() + util.getExpIncrease(),
                        opts.groupName,
                        (opts.groupCount + 1),
                        clubId,
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