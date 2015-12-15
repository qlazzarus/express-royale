/**
 * Created by monoless on 2015-12-15.
 */
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
            var enemy = null;
            var enemyCount = enemyList.length;
            if (0 < enemyCount) {
                enemy = enemyList[util.dice(enemyCount - 1)];
            }

            if (null !== enemy) {
                var defenceStat = util.getBattleRateByDefender(
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

                console.log(attackerStat);
                console.log(defenceStat);

                eventLog.push('enemy');
            }

            require('./finalize')(io, options, socket, reqData, userData, eventName, eventResult, eventLog);
            callback(null);
        }
    ]);
};