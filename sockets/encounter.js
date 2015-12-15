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

module.exports = function(io, options, socket, reqData, userData, eventName, eventResult, eventLog){
    var async = require('async');

    var util = options.container.get('util');
    var userModel = options.models.getModel('user');
    var place = {};
    var places = userData.place;
    for (var i in places) {
        place = places[i];
        if ('place' + userData.account.place === place.idx) {
            break;
        }
    }

    var attacker = userData.account.username;
    if (5 == userData.account.tactics) {
        attacker = null;
    }

    var attackerStat = util.getBattleRateByAttacker(
        userData.account.tactics,
        userData.account.place,
        userData.account.injured,
        userData.account.weapon,
        userData.account.shotSkill,
        userData.account.cutSkill,
        userData.account.throwSkill,
        userData.account.fistSkill,
        userData.account.bowSkill,
        userData.account.meleeSkill,
        userData.account.bombSkill,
        userData.account.pokeSkill
    );

    async.waterfall([
        function (callback) {
            userModel
                .where('place').equals(userData.account.place)
                .where('username').ne(userData.account.username)
                .where('prevAttacker').ne(attacker)
                .exec(callback);
        },

        function (enemyList, callback) {
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

                if (5 == userData.account.tactics && defenderStat.stealth * 2 < util.dice(10) * 100) {
                    enemy.prevAttacker = '';
                }

                if (enemy.prevAttacker == userData.account.username) {
                    continue;
                }

                var isEnemyFind = (util.dice(10) * defenderStat.stealth < attackerStat.find * 100);
                if (isEnemyFind && 0 >= enemy.health) {
                    // TODO deathGet
                    eventLog.push('enemy dead');
                    break;
                } else if (isEnemyFind && util.dice(10) <= attackerStat.ambush) {
                    userData.enemy = enemy;
                    require('./attackStart')(io, options, socket, reqData, userData, eventName, eventResult, eventLog);
                    callback(null);
                    return;
                } else if (isEnemyFind) {
                    userData.enemy = enemy;
                    require('./attack')(io, options, socket, reqData, userData, eventName, eventResult, eventLog);
                    callback(null);
                    return;
                }
            }

            if (0 < enemyCount) {
                eventLog.push('누군가 숨어있는 듯한 느낌이 있다. 기분탓인가?');
                require('./finalize')(io, options, socket, reqData, userData, eventName, eventResult, eventLog);
            }

            callback(null);
        }
    ]);
};