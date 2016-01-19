/**
 * Created by monoless on 2015-12-15.
 */
var async = require('async');
module.exports = function (io, options, socket, req, res) {
    var util = options.container.get('util');
    var userModel = options.models.getModel('user');
    var place = {};
    var places = res.place;
    for (var i in places) {
        place = places[i];
        if ('place' + res.account.place === place.idx) {
            break;
        }
    }

    var eventLog = [];
    var eventName = 'info';
    var item = res.account[req.value];
    var isDeath = false;
    var isEnding = false;
    var isFinalize = true;

    if (typeof item !== 'undefined') {
        var itemInfo = util.getItem(item.idx);
        var Process = {
            stamina: function () {
                if (0 < item.point) {
                    eventLog.push([itemInfo.name, '을(를) 사용했다.'].join(''));
                    eventLog.push('스테미너가 회복됐다.');
                    res.account.stamina += item.point;
                    if (util.getMaxStamina() < res.account.stamina) {
                        res.account.stamina = util.getMaxStamina();
                    }
                } else {
                    Process.poison();
                }

                res.account[req.value] = util.setConsumeItem(item);
            },
            health: function () {
                if (0 < item.point) {
                    eventLog.push([itemInfo.name, '을(를) 사용했다.'].join(''));
                    eventLog.push('체력이 회복됐다.');
                    res.account.health += item.point;
                    if (res.account.maxHealth < res.account.health) {
                        res.account.health = res.account.maxHealth;
                    }
                } else {
                    this.poison();
                }

                res.account[req.value] = util.setConsumeItem(item);
            },
            poison: function () {
                var result = Math.abs(parseInt(item.point * 150 / 100));
                eventLog.push('윽, 큰일났다! 아무래도 독이 들어가 있었던 것 같다!');
                eventLog.push(['<strong class="red">', result, '데미지</strong>!'].join(''));
                res.account.health -= result;

                if (0 >= res.account.health) {
                    isDeath = true;
                    eventName = 'poison';
                }
            },
            weapon: function () {
                Process.equip(res.account.weapon);
            },
            armor: function () {
                Process.equip(res.account.armor[itemInfo.type]);
            },
            equip: function (equip) {
                var desc = '';
                var defaultEquip = '';
                var prevEquip = {
                    idx: equip.idx,
                    point: equip.point,
                    endurance: equip.endurance
                };

                if ('weapon' == itemInfo.equip) {
                    desc = '장비했다';
                    defaultEquip = 'weaponDefault';
                }
                if ('armor' == itemInfo.equip && 'body' == itemInfo.type) {
                    desc = '몸에 장비했다.';
                    defaultEquip = 'armorDefault';
                } else if ('armor' == itemInfo.equip && 'head' == itemInfo.type) {
                    desc = '머리에 장비했다.';
                } else if ('armor' == itemInfo.equip && 'foot' == itemInfo.type) {
                    desc = '다리에 장비했다.';
                } else if ('armor' == itemInfo.equip && 'arm' == itemInfo.type) {
                    desc = '팔에 장비했다.';
                } else if ('armor' == itemInfo.equip && 'accessory' == itemInfo.type) {
                    desc = '몸에 달았다.';
                }

                eventLog.push([itemInfo.name, '을(를) ', desc].join(''));

                if ('weapon' == itemInfo.equip) {
                    res.account.weapon = item;
                } else if ('armor' == itemInfo.equip) {
                    res.account.armor[itemInfo.type] = item;
                }

                if (defaultEquip === prevEquip.idx) {
                    res.account[req.value] = {idx: '', endurance: 0, point: 0};
                } else {
                    res.account[req.value] = prevEquip;
                }
            },
            trap: function () {
                eventLog.push([itemInfo.name, '을(를) 덫으로 설치했다. 스스로도 조심하지 않으면...'].join(''));

                // trap set-up & deploy (+10 id)
                place.items.push({
                    idx: 'trap' + (parseInt(item.idx.replace('trap', '')) + 10),
                    point: item.point,
                    endurance: item.endurance
                });
                place.save();

                // remove item
                res.account[req.value] = {idx: '', endurance: 0, point: 0};
            },
            temp_radar: function () {
                Process.map(false);
            },
            radar: function () {
                Process.map(true);
            },
            '12gauge': function () {
                Process.reload();
            },
            '9mm': function () {
                Process.reload();
            },
            '22lr': function () {
                Process.reload();
            },
            '357mag': function () {
                Process.reload();
            },
            '38special': function () {
                Process.reload();
            },
            '45acp': function () {
                Process.reload();
            },
            apostle: function () {
                Process.reload();
            },
            bow: function () {
                Process.reload();
            },
            reload: function () {
                var weaponInfo = util.getItem(res.account.weapon.idx);
                if (true === weaponInfo.ammoRequire && weaponInfo.ammoType === itemInfo.equip) {
                    var up = weaponInfo.ammoReload - res.account.weapon.endurance;
                    if (item.endurance < up) {
                        up = item.endurance;
                    }

                    if ('bow' === itemInfo.equip) {
                        eventLog.push([itemInfo.name, '을(를) 사용해서, ', weaponInfo.name, '을(를) 보충했다.'].join(''));
                    } else {
                        eventLog.push([itemInfo.name, '을(를) ', weaponInfo.name, '에 장전했다.'].join(''));
                    }

                    eventLog.push([weaponInfo.name, '의 사용횟수가 ', up, '올랐다.'].join(''));

                    res.account.weapon.endurance += up;
                    res.account[req.value] = util.setConsumeItem(item, up);
                } else if (true === weaponInfo.ammoRequire) {
                    eventLog.push([weaponInfo.name, '에 맞지 않는다...'].join(''));
                } else {
                    eventLog.push('이건 어디에 쓰는 것일까...');
                }
            },
            armor_refine: function () {
                var defenceInfo = util.getItem(res.account.armor.body.idx);
                if ('fabric' === defenceInfo.material && 'armorDefault' !== res.account.armor.body.idx) {
                    res.account.armor.body.endurance += item.point;
                    if (30 < res.account.armor.body.endurance) {
                        res.account.armor.body.endurance = 30;
                    }

                    eventLog.push([
                        itemInfo.name, '을(를) 사용했다.', defenceInfo.name, '의 내구력이 ',
                        res.account.armor.body.endurance, '이(가) 되었다.'
                    ].join(''));

                    res.account[req.value] = util.setConsumeItem(item);
                } else {
                    eventLog.push('이건 어디에 쓰는 것일까...');
                }
            },
            weapon_refine: function () {
                var weaponInfo = util.getItem(res.account.weapon.idx);
                if (-1 !== weaponInfo.attackType.indexOf('cut')) {
                    res.account.weapon.point += item.point;
                    if (30 < res.account.weapon.point) {
                        res.account.weapon.point = 30;
                    }

                    eventLog.push([
                        itemInfo.name, '을(를) 사용했다.', weaponInfo.name, '의 공격력이 ',
                        res.account.weapon.point, '이(가) 되었다.'
                    ].join(''));

                    res.account[req.value] = util.setConsumeItem(item);
                } else {
                    eventLog.push('이건 어디에 쓰는 것일까...');
                }
            },
            speaker: function () {
                eventName = 'speaker';
                eventLog.push('확성기를 써서, 모두에게 메시지를 전한다.');
            },
            battery: function () {
                var pcSlot = util.findItemSlotByEquip(
                    'mobilepc',
                    res.account.item0,
                    res.account.item1,
                    res.account.item2,
                    res.account.item3,
                    res.account.item4,
                    res.account.item5
                );

                if (null === pcSlot) {
                    eventLog.push('이건 어디에 쓰는 것일까...');
                } else {
                    res.account[pcSlot].endurance += item.endurance;
                    if (5 < res.account[pcSlot].endurance) {
                        res.account[pcSlot].endurance = 5;
                    }

                    res.account[req.value] = {idx: '', endurance: 0, point: 0};

                    eventLog.push([
                        itemInfo.name,
                        '로 모바일PC를 충전했다. 모바일PC의 사용횟수가 ',
                        res.account[pcSlot].endurance,
                        '이(가) 되었다.'
                    ].join(''));
                }
            },
            program: function () {
                if (0 === res.account.place) {
                    eventLog.push('해제키를 써서 프로그램을 정지시켰다.');
                    eventLog.push('목걸이를 벗었다!');

                    isEnding = true;
                    eventName = 'hackingSuccess';
                } else {
                    eventLog.push('여기에서 써도 의미가 없다...');
                }
            },
            map: function (fullscan) {
                var placeInfo = [];

                isFinalize = false;

                eventLog.push('레이더를 사용했다.');
                eventLog.push('숫자：지역에 있는 사람수<br />붉은숫자：자신이 있는 지역의 사람수');

                userModel.find({deathAt: null}, function (err, users) {
                    for (var i in users) {
                        var user = users[i];
                        var current = placeInfo[user.place];
                        if (false === fullscan && res.account.place !== user.place) {
                            continue;
                        }

                        if (typeof current === 'undefined') {
                            placeInfo[user.place] = 1;
                        } else {
                            placeInfo[user.place] += 1;
                        }

                        if ('hacking' !== res.server.status) {
                            placeInfo[0] = null;
                        }
                    }

                    eventName = 'map';
                    res.placeInfo = placeInfo;
                    require('./finalize')(io, options, socket, req, res, eventName, true, eventLog);
                });
            },
            cellur: function() {
                eventLog.push([
                    '아빠! 엄마! 보고싶어!',
                    '뚜뚜뚜뚜-',
                    '이미 연락두절인듯 하다.',
                    '금지된 음악인 락과 헤비메탈등이 있고,',
                    '총소리도 난다.'
                ].push('<br />'));
            }
        };

        var executor = Process[itemInfo.equip];
        if (typeof executor !== 'undefined') {
            executor();
        } else {
            eventLog.push('이건 어디에 쓰는 것일까...');
        }
    }

    if (true === isDeath && true === isFinalize) {
        require('./userKilled')(io, options, socket, req, res, eventName, true, eventLog);
    } else if (true === isEnding && true === isFinalize) {
        require('./ending')(io, options, socket, req, res, eventName, true, eventLog);
    } else if (true === isFinalize) {
        require('./finalize')(io, options, socket, req, res, eventName, true, eventLog);
    }
};