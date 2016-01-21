/**
 * Created by monoless on 2015-12-15.
 */
module.exports = function(io, options, socket, req, res, eventName, eventResult, eventLog){
    var async = require('async');

    var util = options.container.get('util');
    var place = {};
    var places = res.place;
    for (var i in places) {
        place = places[i];
        if ('place' + res.account.place === place.idx) {
            break;
        }
    }

    var attacker = res.account.username;
    if (5 == res.account.tactics) {
        attacker = null;
    }

    var attackerStat = util.getBattleRateByAttacker(
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

    async.waterfall([
        function (callback) {
            options.repositories.countUser(function(corpseCount){
                callback(null, corpseCount);
            }, {place: res.account.place, deathAt:{$ne:null}});
        },

        function (corpseCount, callback) {
            options.repositories.getUsers(function(users){
                callback(null, corpseCount, users);
            }, {place: res.account.place, username: {$ne: res.account.username}, prevAttacker: {$ne: attacker}});
        },

        function (corpseCount, enemyList) {
            var otherEvent = false;
            var enemyCount = enemyList.length;

            var enemyStart = util.dice(enemyCount - 1);
            for (var i = enemyStart; i < enemyCount; i++) {
                var enemy = enemyList[i];
                var defenderStat = util.getBattleRateByDefender(
                    options.container.get('items'),
                    enemy.status,
                    enemy.tactics,
                    options.container.get('properties').places['place' + enemy.place].specialize,
                    enemy.injured,
                    enemy.weapon,
                    enemy.shotSkill,
                    enemy.cutSkill,
                    enemy.throwSkill,
                    enemy.fistSkill,
                    enemy.bowSkill,
                    enemy.meleeSkill,
                    enemy.bombSkill,
                    enemy.pokeSkill,
                    options.container.get('properties').expPerSkillLevel
                );

                if (5 == res.account.tactics && defenderStat.stealth * 2 < util.dice(10) * 100) {
                    enemy.prevAttacker = '';
                }

                if (enemy.prevAttacker == res.account.username) {
                    continue;
                }

                var isEnemyDetect = (util.dice(10) * defenderStat.stealth < attackerStat.find * 100);
                if (isEnemyDetect && 0 >= enemy.health) {
                    req.value = undefined;
                    res.enemy = enemy;
                    otherEvent = true;
                    require('./deathGet')(io, options, socket, req, res, eventName, eventResult, eventLog);
                    break;
                } else if (isEnemyDetect && util.dice(10) <= attackerStat.ambush) {
                    res.enemy = enemy;
                    otherEvent = true;
                    require('./attackStart')(io, options, socket, req, res, eventName, eventResult, eventLog);
                    break;
                } else if (isEnemyDetect) {
                    res.enemy = enemy;
                    otherEvent = true;
                    require('./attacked')(io, options, socket, req, res, eventName, eventResult, eventLog);
                    break;
                }
            }

            if (false === otherEvent) {
                if (0 < enemyCount && corpseCount < enemyCount) {
                    eventLog.push('누군가 숨어있는 듯한 느낌이 있다. 기분탓인가?');
                }

                require('./finalize')(io, options, socket, req, res, eventName, eventResult, eventLog);
            }
        }
    ]);
};