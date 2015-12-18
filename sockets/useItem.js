/**
 * Created by monoless on 2015-12-15.
 */
module.exports = function (io, options, socket, req, res) {
    var util = options.container.get('util');
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
    var item = res.account[req.command];
    var isDeath = false;
    if (typeof item !== 'undefined') {
        var itemInfo = util.getItem(item.idx);
        var Process = {
            stamina: function () {
                if (0 < itemInfo.point) {
                    eventLog.push([itemInfo.name, '을(를) 사용했다.'].join(''));
                    eventLog.push('스테미너가 회복됐다.');
                    res.account.stamina += itemInfo.point;
                    if (util.getMaxStamina() < res.account.stamina) {
                        res.account.stamina = util.getMaxStamina();
                    }
                } else {
                    Process.poison();
                }

                res.account[req.command] = util.setConsumeItem(item);
            },
            health: function () {
                if (0 < itemInfo.point) {
                    eventLog.push([itemInfo.name, '을(를) 사용했다.'].join(''));
                    eventLog.push('체력이 회복됐다.');
                    res.account.health += itemInfo.point;
                    if (res.account.maxHealth < res.account.health) {
                        res.account.health = res.account.maxHealth;
                    }
                } else {
                    this.poison();
                }

                res.account[req.command] = util.setConsumeItem(item);
            },
            poison: function () {
                var result = parseInt(itemInfo.point * 150 / 100);
                eventLog.push('윽, 큰일났다! 아무래도 독이 들어가 있었던 것 같다!');
                eventLog.push(['<strong class="red">', result, '데미지</strong>!'].join(''));
                res.account.health -= result;

                if (0 >= res.account.health) {
                    isDeath = true;
                }
            },
            weapon: function () {
                Process.equip(res.account.weapon);
            },
            armor: function () {
                Process.equip(res.account.armor[itemInfo.type]);
            },
            equip: function(equip) {
                var desc = '';
                var defaultEquip = '';
                var prevEquip = {
                    idx: equip.idx,
                    point: equip.point,
                    endurance: equip.endurance
                };

                if ('weapon' == itemInfo.equip) {
                    desc = '장비했다';
                    defaultEquip = 'weapon0';
                } if ('armor' == itemInfo.equip && 'body' == itemInfo.type) {
                    desc = '몸에 장비했다.';
                    defaultEquip = 'armor0';
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
                    res.account[req.command] = {idx: '', endurance: 0, point: 0};
                } else {
                    res.account[req.command] = prevEquip;
                }
            },
            trap: function() {
                eventLog.push([itemInfo.name, '을(를) 덫으로 설치했다. 스스로도 조심하지 않으면...'].join(''));

                // trap set-up (+10 id)
                item.idx = 'trap' + (parseInt(item.idx.replace('trap', '')) + 10);

                // trap deploy
                place.items.push(item);
                place.save();

                // remove item
                res.account[req.command] = {idx: '', endurance: 0, point: 0};
            },
            temp_radar: function() {
                // TODO 임시 레이더
                eventLog.push('임시 레이더');
            },
            radar: function() {
                // TODO 레이더
                eventLog.push('레이더');
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
            reload: function() {
                var weaponInfo = util.getItem(res.account.weapon.idx);
                if (true === weaponInfo.ammoRequire && weaponInfo.ammoType === itemInfo.equip) {
                    var up = 0;
                    if (0 > item.endurance - weaponInfo.ammoReload) {
                        up = item.endurance;
                    } else {
                        up = weaponInfo.ammoReload;
                    }

                    if ('bow' === itemInfo.equip) {
                        eventLog.push([itemInfo.name, '을(를) 사용해서, ', weaponInfo.name, '을(를) 보충했다.'].join(''));
                    } else {
                        eventLog.push([itemInfo.name, '을(를) ', weaponInfo.name, '에 장전했다.'].join(''));
                    }

                    eventLog.push([weaponInfo.name, '의 사용횟수가 ', up, '올랐다.'].join(''));

                    res.account.weapon.endurance += up;
                    res.account[req.command] = util.setConsumeItem(item, up);
                } else if (true === weaponInfo.ammoRequire) {
                    eventLog.push([weaponInfo.name, '에 맞지 않는다...'].join(''));
                } else {
                    eventLog.push('이건 어디에 쓰는 것일까...');
                }
            },
            armor_refine: function() {
                var defenceInfo = util.getItem(res.account.armor.body.idx);
                if ('fabric' === defenceInfo.material && 'armor0' !== res.account.armor.body.idx) {
                    res.account.armor.body.endurance +=  item.point;
                    if (30 < res.account.armor.body.endurance) {
                        res.account.armor.body.endurance = 30;
                    }

                    eventLog.push([itemInfo.name, '을(를) 사용했다.', defenceInfo.name, '의 내구력이 ',
                        res.account.armor.body.endurance, '이(가) 되었다.'].join(''));

                    res.account[req.command] = util.setConsumeItem(item);
                } else {
                    eventLog.push('이건 어디에 쓰는 것일까...');
                }
            },
            weapon_refine: function() {
                var weaponInfo = util.getItem(res.account.weapon.idx);
                if (-1 !== weaponInfo.attackType.indexOf('cut')) {
                    res.account.weapon.point += item.point;
                    if (30 < res.account.weapon.point) {
                        res.account.weapon.point = 30;
                    }

                    eventLog.push([itemInfo.name, '을(를) 사용했다.', weaponInfo.name, '의 공격력이 ',
                        res.account.weapon.point, '이(가) 되었다.'].join(''));

                    res.account[req.command] = util.setConsumeItem(item);
                } else {
                    eventLog.push('이건 어디에 쓰는 것일까...');
                }
            },
            speaker: function() {
                // TODO 스피커
                eventLog.push('스피커');
            },
            battery: function() {
                // TODO 배터리
                //$log = ($log . "$in로 모바일PC를 충전했다. 모바일PC의 사용횟수가 $itai[$paso]이(가) 되었다.<BR>");
                eventLog.push('배터리');
            }
        };

        var executor = Process[itemInfo.equip];
        if (typeof executor !== 'undefined') {
            executor();
        } else {
            eventLog.push('이건 어디에 쓰는 것일까...');
        }
    }

    if (false === isDeath) {
        require('./finalize')(io, options, socket, req, res, eventName, true, eventLog);
    } else {
        // TODO 사망
    }
};