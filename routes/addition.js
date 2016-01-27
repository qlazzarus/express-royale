/**
 * Created by monoless on 2015-11-20.
 */
var async = require('async');
module.exports = function (app, options) {
    var util = options.container.get('util');

    function convertItemDesc(item, defaultDesc) {
        if ('' !== item.idx) {
            var itemInfo = options.container.get('items').getInfo(item.idx);
            if (typeof itemInfo === 'undefined') {
                itemInfo = {};
            }

            var result = [itemInfo.name, Math.abs(item.point)];
            if (0 < item.endurance
                || ('weapon' === itemInfo.equip && -1 !== itemInfo.attackType.indexOf('shot'))
                || ('weapon' === itemInfo.equip && -1 !== itemInfo.attackType.indexOf('bow'))) {
                result.push(item.endurance);
            }

            return result.join('/');
        } else {
            return defaultDesc;
        }
    }

    app.get('/rank', function (req, res) {
        options.repositories.getUsers(function(users){
            var survivors = [];
            for (var i in users) {
                var user = users[i];
                if (0 < user.health) {
                    survivors.push(user);
                }
            }

            res.render('rank', {survivors: survivors, survivorCount: survivors.length, userCount: users.length});
        }, {npc: false});
    });

    app.get('/rule', function (req, res) {
        res.render('rule', {
            groupPerMan: options.container.get('properties').groupPerMan,
            maxGroups: options.container.get('properties').maxGroups,
            maxItemLength: 6,
            firstAidStamina: options.container.get('properties').firstAidStamina,
            healthRecoverInterval: options.container.get('properties').healthRecoverInterval,
            healthRecoverIncrease: options.container.get('properties').healthRecoverIncrease,
            staminaRecoverInterval: options.container.get('properties').staminaRecoverInterval,
            staminaRecoverIncrease: options.container.get('properties').staminaRecoverIncrease
        });
    });

    app.get('/news', function (req, res, next) {
        async.parallel({
            news: function (callback) {
                options.repositories.getNews(function(entries){
                    callback(null, entries);
                });
            },
            place: function (callback) {
                options.repositories.getPlaces(function(entries){
                    callback(null, entries);
                });
            },
            server: function (callback) {
                options.repositories.getServerFlag(function(entry){
                    callback(null, entry);
                });
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

                var weekName = ['일', '월', '화', '수', '목', '금', '토'];
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

                    } else if ('RESTRICT' === news.type) {
                        var restrictList = [];
                        var reserveList = [];
                        var restrictLength = news.restrict.length;
                        var reserveLength = news.restrictReserve.length;
                        for (var i = 0; i < restrictLength; i++) {
                            restrictList.push(options.container.get('properties').places['place' + news.restrict[i]].name);
                        }

                        for (var i = 0; i < reserveLength; i++) {
                            reserveList.push(options.container.get('properties').places['place' + news.restrictReserve[i]].name);
                        }

                        var curLog = [
                            currentTime, ' : <strong style="color:#FFFF00;">', restrictList.join(', '),
                            '</strong> 이(가) 금지지역으로 지정되었다.'
                        ];

                        if (0 < news.restrictReserve.length) {
                            curLog.push('<br />다음 금지지역은 <strong style="color:#FFFF00;">');
                            curLog.push(reserveList.join(', '));
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

                    } else if ('KILLED' === news.type && -1 !== [
                            'meleeSkill',
                            'fistSkill'
                        ].indexOf(news.murder.weaponMethod)) {
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

    app.get('/winner', function (req, res) {
        options.repositories.getWinners(function(winners){
            var gameCount = winners.length;
            res.render('winner', {
                winners: winners,
                gameCount: gameCount,
                expPerSkillLevel: options.container.get('properties').expPerSkillLevel,
                convertTimeStamp: function (time) {
                    var weekName = ['일', '월', '화', '수', '목', '금', '토'];
                    var hour = time.getHours();
                    var min = time.getMinutes();

                    return [
                        (time.getYear() + 1900),
                        '년 ',
                        (time.getMonth() + 1),
                        '월 ',
                        time.getDate(),
                        '일 ',
                        weekName[time.getDay()],
                        '요일 ',
                        hour < 10 ? '0' + hour : hour,
                        '시',
                        min < 10 ? '0' + min : min,
                        '분'
                    ].join('');
                },
                convertItemDesc: convertItemDesc,
                showItems: function (item0, item1, item2, item3, item4, item5) {
                    var result = [];
                    var itemList = [item0, item1, item2, item3, item4, item5];

                    for (var i in itemList) {
                        var item = itemList[i];
                        var desc = '';
                        var className = '';

                        if ('' !== item.idx) {
                            var itemInfo = options.container.get('items').getInfo(item.idx);
                            if (typeof itemInfo === 'undefined') {
                                itemInfo = {};
                            }

                            desc = convertItemDesc(item, '');
                            className = itemInfo.equip;

                            result.push({
                                className: className,
                                desc: desc
                            });
                        }
                    }

                    return result;
                }
            });
        });
    });

    app.get('/mix', function (req, res){
        var mixes = options.container.get('items').mixItems;
        var receipts = {
            gun: [],
            bow: [],
            cut: [],
            bomb: [],
            throws: [],
            melee: [],
            fist: [],
            armor: [],
            heal: [],
            stamina: [],
            trap: [],
            etc: []
        };

        for (var i in mixes) {
            var mix = mixes[i];
            var material1 = options.container.get('items').getInfo(mix.material[0]);
            var material2 = options.container.get('items').getInfo(mix.material[1]);
            var result = options.container.get('items').getInfo(mix.result.idx);
            var receipt = [material1.name, '+', material2.name, '=', result.name].join(' ');

            if ('weapon' === result.equip && -1 !== result.attackType.indexOf('shot')) {
                receipts.gun.push(receipt);
            } else if ('weapon' === result.equip && -1 !== result.attackType.indexOf('bow')) {
                receipts.bow.push(receipt);
            } else if ('weapon' === result.equip && -1 !== result.attackType.indexOf('bomb')) {
                receipts.bomb.push(receipt);
            } else if ('weapon' === result.equip && (-1 !== result.attackType.indexOf('cut') || -1 !== result.attackType.indexOf('poke'))) {
                receipts.cut.push(receipt);
            } else if ('weapon' === result.equip && -1 !== result.attackType.indexOf('throw')) {
                receipts.throws.push(receipt);
            } else if ('weapon' === result.equip && -1 !== result.attackType.indexOf('melee')) {
                receipts.melee.push(receipt);
            } else if ('weapon' === result.equip && -1 !== result.attackType.indexOf('fist')) {
                receipts.fist.push(receipt);
            } else if ('armor' === result.equip) {
                receipts.armor.push(receipt);
            } else if ('health' === result.equip) {
                receipts.heal.push(receipt);
            } else if ('stamina' === result.equip) {
                receipts.stamina.push(receipt);
            } else if ('trap' === result.equip) {
                receipts.trap.push(receipt);
            } else {
                receipts.etc.push(receipt);
            }
        }

        res.render('mix', receipts);
    });
};