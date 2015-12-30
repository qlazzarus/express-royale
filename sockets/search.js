/**
 * Created by monoless on 2015-12-14.
 */
module.exports = function(io, options, socket, req, res, eventName, eventResult, eventLog){
    var util = options.container.get('util');

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

    var itemSearchDice = util.dice(10);
    var personSearchDice = util.dice(100);
    var personSearch = util.getPersonSearch(
        res.account.tactics,
        res.account.level,
        res.account.killCount
    );

    if (personSearchDice <= personSearch) {
        require('./encounter')(io, options, socket, req, res, eventName, eventResult, eventLog);

    } else if (itemSearchDice < attackerStat.find && 'explore' == eventName) {
        // 아이템 발견 - 탐색시
        require('./itemget')(io, options, socket, req, res, eventName, eventResult, eventLog);

    } else if (itemSearchDice + 4 < attackerStat.find && 'move' == eventName && 5 !== res.account.tactics) {
        // 아이템 발견 - 이동시
        require('./itemget')(io, options, socket, req, res, eventName, eventResult, eventLog);

    } else {
        // 기타 이벤트
        require('./event')(io, options, socket, req, res, eventName, eventResult, eventLog);
    }
};