/**
 * Created by monoless on 2015-11-20.
 */
var async = require('async');
module.exports = function (app, options) {
    var util = options.container.get('util');

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

    app.get('/rule', function (req, res) {
        res.render('rule');
    });

    app.get('/news', function (req, res, next) {
        var newsModel = options.models.getModel('news');
        var placeModel = options.models.getModel('place');
        var serverModel = options.models.getModel('server');

        async.parallel({
            news: function (callback) {
                newsModel.find({}).sort({registerAt: -1}).exec(callback);
            },
            place: function (callback) {
                placeModel.find({}).exec(callback);
            },
            server: function (callback) {
                serverModel.findOne({}).exec(callback);
            }
        }, function (err, result) {
            if (err) {
                console.log(err);
                next();
            } else {
                var restrict = [];
                var restrictReserve = [];
                var logs = {};

                for (var i in result.place) {
                    var place = result.place[i];
                    if (true === place.restrict) {
                        restrict.push(place.name);
                    } else if (true === place.restrictReserve) {
                        restrictReserve.push(place.name);
                    }
                }

                if ('start' !== result.server.status) {
                    restrictReserve = [];
                }

                var weekName = ['일', '월', '화', '수', '목', '금', '토']
                for (var i in result.news) {
                    var news = result.news[i];
                    var currentDate = [
                        (news.registerAt.getMonth() + 1),
                        '월 ',
                        news.registerAt.getDate(),
                        '일 (',
                        weekName[news.registerAt.getDay()],
                        '요일)'
                    ].join('');

                    var hour = news.registerAt.getHours();
                    var min = news.registerAt.getMinutes();
                    var currentTime = [
                        hour < 10 ? '0' + hour : hour,
                        '시',
                        min < 10 ? '0' + min : min,
                        '분'
                    ].join('');

                    if (typeof logs[currentDate] === 'undefined') {
                        logs[currentDate] = [];
                    }

                    if ('NEWGAME' === news.type) {
                        logs[currentDate].push([currentTime, ' : 새로운 프로그램 개시'].join(''));

                    } else if ('ENTRY' === news.type) {
                        logs[currentDate].push([
                            currentTime, ' : <span style="color:#A0C0FF;">', news.victim.username,
                            '이(가) 전학해 왔다.</span>'
                        ].join(''));

                    } else if ('start' === result.server.status && 'RESTRICT' === news.type) {
                        var curLog = [
                            currentTime, ' : <strong style="color:#FFFF00;">', restrict.join(', '),
                            '</strong> 이(가) 금지지역으로 지정되었다.'
                        ];

                        if (0 < restrictReserve.length) {
                            curLog.push('<br />다음 금지지역은 <strong style="color:#FFFF00;">');
                            curLog.push(restrictReserve.join(', '));
                            curLog.push('</strong>.');
                        }

                        logs[currentDate].push(curLog.join(''));

                    } else if ('HACKING_SUCCESS' === news.type) {
                        logs[currentDate].push([
                            currentTime,
                            ' : <strong style="color:#ffff00; font-size:12pt;">게임종료·프로그램 긴급정지</strong>'
                        ].join(''));

                    } else if ('NO_WINNER' === news.type) {
                        logs[currentDate].push([
                            currentTime,
                            ' : <strong style="color:#ffff00; font-size:12pt;">게임종료(타임아웃)·이상 본 프로그램 실시본부</strong>'
                        ].join(''));

                    } else if ('ENDING' === news.type) {
                        logs[currentDate].push([
                            currentTime,
                            ' : <strong style="color:#ffff00; font-size:12pt;">게임종료·이상 본 프로그램 실시본부</strong><br />',
                            '　　　　우승자 : ',
                            news.victim.username, ' (',
                            news.victim.groupName, ' ',
                            0 == news.victim.userGender ? '남자' : '여자',
                            news.victim.studentNo,
                            '번)'
                        ].join(''));

                    } else if ('SPEAKER' === news.type) {
                        logs[currentDate].push([
                            currentTime,
                            ' : <span style="color:#60FF60;">',
                            news.victim.username,
                            '이(가)『',
                            news.message,
                            '』라고 확성기로 외쳤다.</span>'
                        ].join(''));

                    } else if ('DEATH' === news.type && 'restrictArea' === news.murder.weaponMethod) {
                        logs[currentDate].push([
                            currentTime,
                            ' : <span style="color:#F03020;">',
                            news.victim.username,
                            '이(가) 금지지역에서 목걸이가 폭발해 사망했다.</span>'
                        ].join(''));

                    } else if ('DEATH' === news.type && 'hackingFailed' === news.murder.weaponMethod) {
                        logs[currentDate].push([
                            currentTime,
                            ' : <span style="color:#F03020;">',
                            news.victim.username,
                            '이(가) 목걸이가 폭발해 사망했다.</span>'
                        ].join(''));

                    } else if ('DEATH' === news.type && 'poison' === news.murder.weaponMethod) {
                        logs[currentDate].push([
                            currentTime,
                            ' : <span style="color:#F03020;">',
                            news.victim.username,
                            '이(가) 독살 당했다.</span>'
                        ].join(''));

                    } else if ('DEATH' === news.type) {
                        logs[currentDate].push([
                            currentTime,
                            ' : <span style="color:#F03020;">',
                            news.victim.username,
                            '이(가) 사망했다.</span>'
                        ].join(''));

                    } else if ('KILLED' === news.type && 'cutSkill' === news.murder.weaponMethod) {
                        logs[currentDate].push([
                            currentTime,
                            ' : <span style="color:#F03020;">',
                            news.victim.username,
                            '은(는) ',
                            news.murder.username,
                            '의 ',
                            news.murder.weaponName,
                            '에 베어 죽었다.',
                            '</span>'
                        ].join(''));

                    } else if ('KILLED' === news.type && 'bowSkill' === news.murder.weaponMethod) {
                        logs[currentDate].push([
                            currentTime,
                            ' : <span style="color:#F03020;">',
                            news.victim.username,
                            '은(는) ',
                            news.murder.username,
                            '이(가) ',
                            news.murder.weaponName,
                            '으(로) 쏜 화살에 맞아 죽었다.',
                            '</span>'
                        ].join(''));

                    } else if ('KILLED' === news.type && 'shotSkill' === news.murder.weaponMethod) {
                        logs[currentDate].push([
                            currentTime,
                            ' : <span style="color:#F03020;">',
                            news.victim.username,
                            '은(는) ',
                            news.murder.username,
                            '이(가) ',
                            news.murder.weaponName,
                            '으(로) 쏜 총알에 맞아 죽었다.',
                            '</span>'
                        ].join(''));

                    } else if ('KILLED' === news.type && 'throwSkill' === news.murder.weaponMethod) {
                        logs[currentDate].push([
                            currentTime,
                            ' : <span style="color:#F03020;">',
                            news.victim.username,
                            '은(는) ',
                            news.murder.username,
                            '이(가) 던진 ',
                            news.murder.weaponName,
                            '에 맞아 죽었다.',
                            '</span>'
                        ].join(''));

                    } else if ('KILLED' === news.type && 'bombSkill' === news.murder.weaponMethod) {
                        logs[currentDate].push([
                            currentTime,
                            ' : <span style="color:#F03020;">',
                            news.victim.username,
                            '은(는) ',
                            news.murder.username,
                            '이(가) 던진 ',
                            news.murder.weaponName,
                            '이(가) 폭발해 죽었다.',
                            '</span>'
                        ].join(''));

                    } else if ('KILLED' === news.type && 'pokeSkill' === news.murder.weaponMethod) {
                        logs[currentDate].push([
                            currentTime,
                            ' : <span style="color:#F03020;">',
                            news.victim.username,
                            '은(는) ',
                            news.murder.username,
                            '의 ',
                            news.murder.weaponName,
                            '에 찔려 죽었다.',
                            '</span>'
                        ].join(''));

                    } else if ('KILLED' === news.type && -1 !== ['meleeSkill', 'fistSkill'].indexOf(news.murder.weaponMethod)) {
                        logs[currentDate].push([
                            currentTime,
                            ' : <span style="color:#F03020;">',
                            news.victim.username,
                            '은(는) ',
                            news.murder.username,
                            '의 ',
                            news.murder.weaponName,
                            '에 두들겨 맞아 죽었다.',
                            '</span>'
                        ].join(''));

                    } else if ('KILLED' === news.type) {
                        logs[currentDate].push([
                            currentTime,
                            ' : <span style="color:#F03020;">',
                            news.victim.username,
                            '은(는) ',
                            news.murder.username,
                            '의 ',
                            news.murder.weaponName,
                            '에 의해 살해 되었다.',
                            '</span>'
                        ].join(''));

                    }
                }

                res.render('news', {
                    restrict: restrict.join(', '),
                    restrictReserve: restrictReserve.join(', '),
                    logs: logs
                });
            }
        });
    });

    app.get('/winner', function (req, res, next){
        var winnerModel = options.models.getModel('winner');
        winnerModel.find({}, function(err, winners){
            if (err) {
                console.log(err);
                next();
            } else {
                res.render('winner', {winners: winners});
            }
        });
    });
};