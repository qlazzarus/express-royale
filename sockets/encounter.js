/**
 * Created by monoless on 2015-12-15.
 */
function shuffle(array) {
    var counter = array.length, temp, index;

    // While there are elements in the array
    while (counter > 0) {
        // Pick a random index
        index = Math.floor(Math.random() * counter);

        // Decrease counter by 1
        counter--;

        // And swap the last element with it
        temp = array[counter];
        array[counter] = array[index];
        array[index] = temp;
    }

    return array;
}

module.exports = function(io, options, socket, req, res, eventName, eventResult, eventLog){
    var async = require('async');

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

    var attacker = res.account.username;
    if (5 == res.account.tactics) {
        attacker = null;
    }

    var attackerStat = util.getBattleRateByAttacker(
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

    async.waterfall([
        function (callback) {
            userModel
                .where('place').equals(res.account.place)
                .where('username').ne(res.account.username)
                .where('prevAttacker').ne(attacker)
                .exec(callback);
        },

        function (enemyList, callback) {
            var finalize = true;
            var enemyCount = enemyList.length;
            var shuffleEnemy = shuffle(enemyList);
            if (enemyCount > 5) {
                enemyCount = 5;
            }

            for (var i = 0; i < enemyCount; i++) {
                var enemy = shuffleEnemy[0];
                var defenderStat = util.getBattleRateByDefender(
                    enemy.status,
                    enemy.tactics,
                    enemy.place,
                    enemy.injured,
                    enemy.weapon,
                    enemy.shotSkill,
                    enemy.cutSkill,
                    enemy.throwSkill,
                    enemy.fistSkill,
                    enemy.bowSkill,
                    enemy.meleeSkill,
                    enemy.bombSkill,
                    enemy.pokeSkill
                );

                if (5 == res.account.tactics && defenderStat.stealth * 2 < util.dice(10) * 100) {
                    enemy.prevAttacker = '';
                }

                if (enemy.prevAttacker == res.account.username) {
                    continue;
                }

                var isEnemyFind = (util.dice(10) * defenderStat.stealth < attackerStat.find * 100);
                if (isEnemyFind && 0 >= enemy.health) {
                    // TODO deathGet
                    eventLog.push('enemy dead');
                    break;
                } else if (isEnemyFind && util.dice(10) <= attackerStat.ambush) {
                    res.enemy = enemy;
                    finalize = false;
                    require('./attackStart')(io, options, socket, req, res, eventName, eventResult, eventLog);
                    break;
                } else if (isEnemyFind) {
                    res.enemy = enemy;
                    finalize = false;
                    require('./attacked')(io, options, socket, req, res, eventName, eventResult, eventLog);
                    break;
                }
            }

            if (0 < enemyCount) {
                eventLog.push('누군가 숨어있는 듯한 느낌이 있다. 기분탓인가?');
            }

            if (true === finalize) {
                require('./finalize')(io, options, socket, req, res, eventName, eventResult, eventLog);
            }

            callback(null);
        }
    ]);
};