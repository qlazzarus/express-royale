/**
 * Created by monoless on 2015-12-16.
 */
module.exports = function(io, options, socket, req, res, eventName, eventResult, eventLog){
    var util = options.container.get('util');

    if (0 < res.enemy.health && res.enemy.place == res.account.place) {
        var userKilled = false;
        var enemyKilled = false;

        var battleResult = util.getBattleResult(res.enemy, req.command, res.account, false, eventLog);
        eventLog = battleResult.eventLog;

        var enemyStat = util.getBattleRateByAttacker(
            res.enemy.tactics,
            res.enemy.place,
            res.enemy.injured,
            res.enemy.weapon,
            res.enemy.shotSkill,
            res.enemy.cutSkill,
            res.enemy.throwSkill,
            res.enemy.fistSkill,
            res.enemy.bowSkill,
            res.enemy.meleeSkill,
            res.enemy.bombSkill,
            res.enemy.pokeSkill
        );

        eventLog.push([
            res.enemy.username,
            '(',
            res.enemy.groupName,
            ' ',
            0 == res.enemy.userGender ? '남자' : '여자',
            res.enemy.studentNo,
            '번)이(가) 갑자기 습격해 왔다!'
        ].join(''));

        // 적 상태가 치료나 수면일때 미리 계산 추가
        if (-1 !== [5, 6].indexOf(res.enemy.status)) {
            util.setRecover(res.enemy);
        }

        // 공격 시도
        var attackDice = util.dice(100);
        if (attackDice < enemyStat.accuracyRate) {
            // 적
            var enemyWeapon = util.getItem(res.enemy.weapon.idx);
            var enemyCommand = enemyWeapon.attackType[0] + 'Skill';
            if (true == enemyWeapon.ammoRequire && 0 == res.enemy.weapon.endurance) {
                enemyCommand = 'meleeSkill';
            }

            // 플레이어
            var accountDefence = util.getDefencePercent(
                res.account.defence,
                res.account.armor.head.point,
                res.account.armor.body.point,
                res.account.armor.arm.point,
                res.account.armor.foot.point,
                res.account.armor.accessory.point
            );

            res.account.prevAttacker = res.enemy.username;

            var accountWeapon = util.getItem(res.account.weapon.idx);
            var skillType  = accountWeapon.attackType[0] + 'Skill';
            if (true == accountWeapon.ammoRequire && 0 == res.account.weapon.endurance) {
                skillType = 'meleeSkill';
            }

            var enemyAttack = util.getAttackPercent(res.enemy.attack, res.enemy.weapon.point, enemyCommand);
            var enemyResult = util.getTotalDamage(
                enemyAttack,
                battleResult.damage,
                accountDefence,
                skillType,
                res.enemy.armor.body.idx,
                res.enemy.armor.head.idx,
                res.enemy.armor.accessory.idx
            );

            eventLog.push([
                '<strong class="red">', enemyResult, '데미지 ',
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

            res.account.health -= enemyResult;
            res.account.armor.body = util.setConsumeBodyArmor(res.account.armor.body);
            res.account.injured = util.setInjured(res.account.injured, battleResult.injured);
        } else {
            eventLog.push('그러나, 간발의 차이로 피했다!');
        }

        res.enemy.weapon = util.setConsumeWeapon(res.enemy.weapon, enemyCommand);
        if ('shotSkill' === enemyCommand) {
            util.broadcastToAll(socket, res.account.place, 'shot', res.enemy.username);
        } else if ('bombSkill' === enemyCommand) {
            util.broadcastToAll(socket, res.account.place, 'bomb', res.enemy.username);
        }

        var accountStat = util.getBattleRateByDefender(
            res.account.status,
            res.account.tactics,
            res.account.place,
            res.account.injured,
            res.account.weapon,
            res.account.shotSkill,
            res.account.cutSkill,
            res.account.throwSkill,
            res.account.fistSkill,
            res.account.bowSkill,
            res.account.meleeSkill,
            res.account.bombSkill,
            res.account.pokeSkill
        );

        if (0 >= res.account.health) {
            userKilled = true;
        } else if (7 >= util.dice(10) && accountStat.longRangeEngage == enemyStat.longRangeEngage) {
            // 반격
            var strikeResult = util.getBattleResult(res.account, skillType, res.enemy, true, eventLog);
            eventLog = strikeResult.eventLog;

            // 반격 시도
            if (attackDice < accountStat.accuracyRate) {
                var accountAttack = util.getAttackPercent(res.account.attack, res.account.weapon.point, skillType);
                var enemyDefence = util.getDefencePercent(
                    res.enemy.defence,
                    res.enemy.armor.head.point,
                    res.enemy.armor.body.point,
                    res.enemy.armor.arm.point,
                    res.enemy.armor.foot.point,
                    res.enemy.armor.accessory.point
                );

                res.account.prevAttacker = res.enemy.username;

                var result = util.getTotalDamage(
                    accountAttack,
                    strikeResult.damage,
                    enemyDefence,
                    skillType,
                    res.enemy.armor.body.idx,
                    res.enemy.armor.head.idx,
                    res.enemy.armor.accessory.idx
                );

                eventLog.push([
                    '<strong class="red">', result, '데미지 ',
                    true === strikeResult.weaponDestroy ? '무기손상' : '',
                    '' !== strikeResult.injured ? {
                        head: '머리 부상',
                        arm: '팔 부상',
                        body: '복부 부상',
                        foot: '다리 부상'
                    }[strikeResult.injured] : '',
                    true === strikeResult.critical ? '크리티컬' : '',
                    '</strong>!'
                ].join(''));

                res.enemy.health -= result;
                res.enemy.armor.body = util.setConsumeBodyArmor(res.enemy.armor.body);
                res.enemy.injured = util.setInjured(res.enemy.injured, strikeResult.injured);
                res.account.requireExp-= util.getBattleExp(res.account.level, res.enemy.level);

                // 레벨업 이벤트
                var accountLevelUp = util.setLevelUp(res.account.level, res.account.maxHealth, res.account.attack,
                    res.account.defence, res.account.requireExp);
                if (true === accountLevelUp.status) {
                    res.account.level = accountLevelUp.level;
                    res.account.maxHealth = accountLevelUp.maxHealth;
                    res.account.attack = accountLevelUp.attack;
                    res.account.defence = accountLevelUp.defence;
                    res.account.requireExp = accountLevelUp.requireExp;
                }

                if (0 >= res.enemy.health) {
                    enemyKilled = true;
                } else {
                    eventLog.push([res.account.username, '은(는) 도망쳤다...'].join(''));

                    util.battleInfoToVictim(socket, res.enemy, res.account, enemyResult, strikeResult, result);
                }
            } else {
                eventLog.push('그러나, 피했다!');

                util.battleInfoToVictim(socket, res.enemy, res.account, enemyResult, strikeResult);
            }

            // 탄소모
            res.account.weapon = util.setConsumeWeapon(res.account.weapon, req.command);
            if ('shotSkill' === req.command) {
                util.broadcastToAll(socket, res.account.place, 'shot', res.enemy.username);
            } else if ('bombSkill' === req.command) {
                util.broadcastToAll(socket, res.account.place, 'bomb', res.enemy.username);
            }
        }
    }

    if (true === userKilled && false === enemyKilled) {
        req.command = enemyCommand;
        require('./userKilled')(io, options, socket, req, res, 'attackResult', true, eventLog);
    } else if (false === userKilled && true === enemyKilled) {
        req.command = skillType;
        require('./enemyKilled')(io, options, socket, req, res, eventName, eventResult, eventLog);
    } else {
        require('./finalize')(io, options, socket, req, res, eventName, eventResult, eventLog);
    }
};