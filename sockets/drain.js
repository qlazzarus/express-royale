/**
 * Created by monoless on 2015-12-15.
 */
module.exports = function (io, options, socket, req, res, eventName, eventResult, eventLog) {
    var util = options.container.get('util');

    eventLog.push([
        res.account.username,
        '은(는), 스테미너가 바닥났다... 최대 HP가 감소했다.'
    ].join(''));

    var isDeath = false;

    var damage = util.dice(parseInt(res.account.maxHealth / 10)) + parseInt(res.account.maxHealth / 10);
    if (10 > damage) {
        damage = 10;
    }

    res.account.stamina = util.dice(parseInt(util.getMaxStamina() / 10)) + parseInt(util.getMaxStamina() / 4);
    res.account.maxHealth -= damage;

    if (res.account.health > res.account.maxHealth) {
        res.account.health = res.account.maxHealth;
    }

    if (0 >= res.account.maxHealth) {
        res.account.maxHealth = 0;
        isDeath = true;
    }

    return {
        isDeath: isDeath,
        userData: res,
        eventLog: eventLog
    };
};