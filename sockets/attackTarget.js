/**
 * Created by monoless on 2015-12-16.
 */
module.exports = function (io, options, socket, req, res) {
    var async = require('async');
    var util = options.container.get('util');

    async.waterfall([
        function (callback) {
            options.repositories.getUser(function(user){
                callback(null, user);
            }, {username: req.value});
        },

        function (enemy) {
            var encounterFail = false;
            var enemyDeath = false;
            var enemyNoExist = false;
            var userKilled = false;
            var enemyKilled = false;
            var attacker = res.account.username;
            if (5 == res.account.tactics) {
                attacker = null;
            }

            if (null === enemy) {
                encounterFail = true;
                enemyNoExist = true;
            } else if (0 >= enemy.health) {
                encounterFail = true;
                enemyDeath = true;
            } else if (enemy.prevAttacker == attacker) {
                encounterFail = true;
            } else if (enemy.place != res.account.place) {
                encounterFail = true;
            }

            var eventName = 'attackResult';
            var eventLog = [];
            if (false === encounterFail) {
                res.enemy = enemy;

                // 적 상태가 치료나 수면일때 미리 계산 추가
                if (-1 !== [5, 6].indexOf(res.enemy.status)) {
                    util.setRecover(
                        res.enemy,
                        options.container.get('properties').staminaRecoverInterval,
                        options.container.get('properties').staminaRecoverIncrease,
                        options.container.get('properties').healthRecoverInterval,
                        options.container.get('properties').healthRecoverIncrease,
                        options.container.get('properties').maxStamina
                    );
                }

                eventLog.push([
                    res.enemy.username, '(', res.enemy.groupName, ' ',
                    0 == res.enemy.userGender ? '남자' : '여자',
                    res.enemy.studentNo, '번)와(과) 전투개시!'
                ].join(''));

                // 플레이어
                var accountStat = util.getBattleRateByAttacker(
                    options.container.get('items'),
                    res.account.tactics,
                    options.container.get('properties').places['place' + res.account.place].specialize,
                    res.account.injured,
                    res.account.weapon,
                    res.account.shotSkill,
                    res.account.cutSkill,
                    res.account.throwSkill,
                    res.account.fistSkill,
                    res.account.bowSkill,
                    res.account.meleeSkill,
                    res.account.bombSkill,
                    res.account.pokeSkill,
                    options.container.get('properties').expPerSkillLevel
                );

                var enemyStat = util.getBattleRateByDefender(
                    options.container.get('items'),
                    res.enemy.status,
                    res.enemy.tactics,
                    options.container.get('properties').places['place' + res.enemy.place].specialize,
                    res.enemy.injured,
                    res.enemy.weapon,
                    res.enemy.shotSkill,
                    res.enemy.cutSkill,
                    res.enemy.throwSkill,
                    res.enemy.fistSkill,
                    res.enemy.bowSkill,
                    res.enemy.meleeSkill,
                    res.enemy.bombSkill,
                    res.enemy.pokeSkill,
                    options.container.get('properties').expPerSkillLevel
                );

                var accountWeapon = options.container.get('items').getInfo(res.account.weapon.idx);
                if (-1 === accountWeapon.attackType.indexOf(req.command.replace('Skill', ''))) {
                    req.command = accountWeapon.attackType[0] + 'Skill';
                } else if (true == accountWeapon.ammoRequire && 0 == res.account.weapon.endurance) {
                    req.command = 'meleeSkill';
                }

                var accountAttack = util.getAttackPercent(res.account.attack, accountStat.accuracyRate,
                    res.account.weapon.point, res.account.weapon.stats, req.command);

                // 적
                res.enemy.prevAttacker = res.account.username;

                var enemyWeapon = options.container.get('items').getInfo(res.enemy.weapon.idx);
                var enemyCommand = enemyWeapon.attackType[0] + 'Skill';
                if (true == enemyWeapon.ammoRequire && 0 == res.enemy.weapon.endurance) {
                    enemyCommand = 'meleeSkill';
                }

                var enemyDefence = util.getDefencePercent(
                    res.enemy.defence,
                    res.enemy.armor.head.point,
                    res.enemy.armor.body.point,
                    res.enemy.armor.arm.point,
                    res.enemy.armor.foot.point,
                    res.enemy.armor.accessory.point,
                    enemyStat.defence
                );

                var battleResult = util.getBattleResult(options.container.get('items'), res.account, req.command,
                    res.enemy, false, options.container.get('properties').expPerSkillLevel, eventLog);
                eventLog = battleResult.eventLog;

                // 공격 시도
                var attackDice = util.dice(100);
                if (attackDice < accountStat.accuracyRate) {
                    var result = util.getTotalDamage(
                        options.container.get('items'),
                        accountAttack,
                        battleResult.damage,
                        enemyDefence,
                        req.command,
                        res.enemy.armor.body.idx,
                        res.enemy.armor.head.idx,
                        res.enemy.armor.accessory.idx
                    );

                    eventLog.push([
                        '<strong class="red">', result, '데미지 ',
                        true === battleResult.weaponDestroy ? '무기손상' : '',
                        '' !== battleResult.injured ? {
                            head: '머리 부상',
                            arm: '팔 부상',
                            body: '복부 부상',
                            foot: '다리 부상'
                        }[battleResult.injured] : '',
                        true === battleResult.critical ? '크리티컬' : '',
                        '</strong>!'
                    ].join(''));

                    res.enemy.health -= result;
                    res.enemy.armor.body = util.setConsumeBodyArmor(res.enemy.armor.body);
                    res.enemy.injured = util.setInjured(res.enemy.injured, battleResult.injured);
                    res.account.requireExp-= util.getBattleExp(res.account.level, res.enemy.level);

                    // 레벨업 이벤트
                    var accountLevelUp = util.setLevelUp(res.account.level, res.account.maxHealth, res.account.attack,
                        res.account.defence, res.account.requireExp, options.container.get('properties').expPerLevel,
                        options.container.get('properties').expIncrease);
                    if (true === accountLevelUp.status) {
                        res.account.level = accountLevelUp.level;
                        res.account.maxHealth = accountLevelUp.maxHealth;
                        res.account.attack = accountLevelUp.attack;
                        res.account.defence = accountLevelUp.defence;
                        res.account.requireExp = accountLevelUp.requireExp;
                    }

                    var strikeBackDice = util.dice(10);
                    if (0 >= res.enemy.health) {
                        res.enemy.health = 0;
                        enemyKilled = true;
                    } else if (5 > strikeBackDice && accountStat.longRangeEngage == enemyStat.longRangeEngage) {
                        // 반격
                        var strikeResult = util.getBattleResult(options.container.get('items'), res.enemy, enemyCommand,
                            res.account, true, options.container.get('properties').expPerSkillLevel, eventLog);
                        eventLog = strikeResult.eventLog;

                        // 반격 시도
                        if (attackDice < enemyStat.accuracyRate) {
                            var enemyAttack = util.getAttackPercent(res.enemy.attack, enemyStat.accuracyRate,
                                res.enemy.weapon.point, res.enemy.weapon.stats, enemyCommand);

                            var accountDefence = util.getDefencePercent(
                                res.account.defence,
                                res.account.armor.head.point,
                                res.account.armor.body.point,
                                res.account.armor.arm.point,
                                res.account.armor.foot.point,
                                res.account.armor.accessory.point,
                                accountStat.defence
                            );

                            res.account.prevAttacker = res.enemy.username;

                            var enemyResult = util.getTotalDamage(
                                options.container.get('items'),
                                enemyAttack,
                                strikeResult.damage,
                                accountDefence,
                                enemyCommand,
                                res.account.armor.body.idx,
                                res.account.armor.head.idx,
                                res.account.armor.accessory.idx
                            );

                            eventLog.push([
                                '<strong class="red">', enemyResult, '데미지 ',
                                '' !== strikeResult.injured ? {
                                    head: '머리 부상',
                                    arm: '팔 부상',
                                    body: '복부 부상',
                                    foot: '다리 부상'
                                }[strikeResult.injured] : '',
                                true === strikeResult.critical ? '크리티컬' : '',
                                '</strong>!'
                            ].join(''));

                            res.account.health -= enemyResult;
                            res.account.armor.body = util.setConsumeBodyArmor(res.account.armor.body);
                            res.account.injured = util.setInjured(res.account.injured, strikeResult.injured);

                            if (0 >= res.account.health) {
                                userKilled = true;
                            } else {
                                res.enemy.requireExp -= util.getBattleExp(res.enemy.level, res.account.level);
                                eventLog.push([res.enemy.username, '은(는) 도망갔다...'].join(''));
                                util.battleInfoToVictim(
                                    options.container.get('items'),
                                    socket,
                                    options.container.get('properties').expPerSkillLevel,
                                    options.container.get('properties').skills,
                                    options.container.get('properties').tactics,
                                    options.container.get('properties').staminaRecoverInterval,
                                    options.container.get('properties').staminaRecoverIncrease,
                                    options.container.get('properties').healthRecoverInterval,
                                    options.container.get('properties').healthRecoverIncrease,
                                    res.enemy,
                                    res.account,
                                    result,
                                    strikeResult,
                                    enemyResult
                                );
                            }

                            // 적 레벨업 이벤트
                            var enemyLevelUp = util.setLevelUp(res.enemy.level, res.enemy.maxHealth, res.enemy.attack,
                                res.enemy.defence, res.enemy.requireExp, options.container.get('properties').expPerLevel,
                                options.container.get('properties').expIncrease);
                            if (true === enemyLevelUp.status) {
                                res.enemy.level = enemyLevelUp.level;
                                res.enemy.maxHealth = enemyLevelUp.maxHealth;
                                res.enemy.attack = enemyLevelUp.attack;
                                res.enemy.defence = enemyLevelUp.defence;
                                res.enemy.requireExp = enemyLevelUp.requireExp;
                            }
                        } else {
                            // 반격 회피
                            eventLog.push('그러나, 간발의 차이로 피했다!');
                            util.battleInfoToVictim(
                                options.container.get('items'),
                                socket,
                                options.container.get('properties').expPerSkillLevel,
                                options.container.get('properties').skills,
                                options.container.get('properties').tactics,
                                options.container.get('properties').staminaRecoverInterval,
                                options.container.get('properties').staminaRecoverIncrease,
                                options.container.get('properties').healthRecoverInterval,
                                options.container.get('properties').healthRecoverIncrease,
                                res.enemy,
                                res.account,
                                result
                            );
                        }

                        // 적 탄 소모
                        res.enemy.weapon = util.setConsumeWeapon(options.container.get('items'), res.enemy.weapon,
                            enemyCommand);
                        if ('shotSkill' === enemyCommand && -1 === res.enemy.weapon.stats.indexOf('silence')) {
                            util.broadcastToAll(
                                socket,
                                res.account.place,
                                options.container.get('properties').places['place' + res.account.place].name,
                                'shot',
                                res.enemy.username
                            );
                        } else if ('bombSkill' === enemyCommand) {
                            util.broadcastToAll(
                                socket,
                                res.account.place,
                                options.container.get('properties').places['place' + res.account.place].name,
                                'bomb',
                                res.enemy.username
                            );
                        }
                    } else if (5 > strikeBackDice && accountStat.longRangeEngage != enemyStat.longRangeEngage) {
                        // 반격 실패 (거리 안맞음)
                        eventLog.push([res.enemy.username, '은(는) 반격할 수 없다!'].join(''));
                        eventLog.push([res.enemy.username, '은(는) 도망쳤다...'].join(''));
                        util.battleInfoToVictim(
                            options.container.get('items'),
                            socket,
                            options.container.get('properties').expPerSkillLevel,
                            options.container.get('properties').skills,
                            options.container.get('properties').tactics,
                            options.container.get('properties').staminaRecoverInterval,
                            options.container.get('properties').staminaRecoverIncrease,
                            options.container.get('properties').healthRecoverInterval,
                            options.container.get('properties').healthRecoverIncrease,
                            res.enemy,
                            res.account,
                            result
                        );
                    } else {
                        // 반격 실패
                        eventLog.push([res.enemy.username, '은(는) 도망쳤다...'].join(''));
                        util.battleInfoToVictim(
                            options.container.get('items'),
                            socket,
                            options.container.get('properties').expPerSkillLevel,
                            options.container.get('properties').skills,
                            options.container.get('properties').tactics,
                            options.container.get('properties').staminaRecoverInterval,
                            options.container.get('properties').staminaRecoverIncrease,
                            options.container.get('properties').healthRecoverInterval,
                            options.container.get('properties').healthRecoverIncrease,
                            res.enemy,
                            res.account,
                            result
                        );
                    }
                } else {
                    eventLog.push(['그러나, 피했다! ', true === battleResult.weaponDestroy ? '무기손상' : ''].join(''));
                }
            } else if (true === encounterFail && true === enemyDeath) {
                eventName = 'info';
                eventLog.push([enemy.username, '은(는) 도망쳐 버렸다!'].join(''));
            } else if (true === encounterFail && true === enemyNoExist) {
                eventName = 'info';
                eventLog.push([enemy.username, '은(는) 멀리 도망쳐 버렸다!'].join(''));
            } else {
                eventLog.push([
                    '그러나, ', enemy.username, '(', enemy.groupName, ' ',
                    0 == enemy.userGender ? '남자' : '여자',
                    enemy.studentNo, '번)은(는) 도망쳐 버렸다!'
                ].join(''));
            }

            // 탄소모
            res.account.weapon = util.setConsumeWeapon(options.container.get('items'), res.account.weapon, req.command);
            if ('shotSkill' === req.command && -1 === res.account.weapon.stats.indexOf('silence')) {
                util.broadcastToAll(
                    socket,
                    res.account.place,
                    options.container.get('properties').places['place' + res.account.place].name,
                    'shot',
                    enemy.username
                );
            } else if ('bombSkill' === req.command) {
                util.broadcastToAll(
                    socket,
                    res.account.place,
                    options.container.get('properties').places['place' + res.account.place].name,
                    'bomb',
                    enemy.username
                );
            }

            if (false === userKilled && false == enemyKilled) {
                require('./finalize')(io, options, socket, req, res, eventName, true, eventLog);
            } else if (false === userKilled && true === enemyKilled) {
                require('./enemyKilled')(io, options, socket, req, res, eventName, true, eventLog);
            } else {
                req.command = enemyCommand;
                require('./userKilled')(io, options, socket, req, res, eventName, true, eventLog);
            }
        }
    ]);
};