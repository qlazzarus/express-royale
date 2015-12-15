/**
 * Created by monoless on 2015-12-14.
 */
module.exports = function(io, options, socket, reqData, userData, eventName, eventResult, eventLog){
    var util = options.container.get('util');

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

    var itemSearchDice = util.dice(10);
    var personSearchDice = util.dice(100);
    var personSearch = util.getPersonSearch(
        userData.account.tactics,
        userData.account.level,
        userData.account.killCount
    );

    if (personSearchDice <= personSearch) {
        require('./encounter')(io, options, socket, reqData, userData, eventName, eventResult, eventLog);

    } else if (itemSearchDice < attackerStat.find && 'explore' == eventName) {
        // 아이템 발견 - 탐색시
        require('./itemget')(io, options, socket, reqData, userData, eventName, eventResult, eventLog);

    } else if (itemSearchDice + 4 < attackerStat.find && 'move' == eventName && 5 !== userData.account.tactics) {
        // 아이템 발견 - 이동시
        require('./itemget')(io, options, socket, reqData, userData, eventName, eventResult, eventLog);

    } else {
        // 기타 이벤트
        require('./event')(io, options, socket, reqData, userData, eventName, eventResult, eventLog);
    }
};