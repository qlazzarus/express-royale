/**
 * Created by monoless on 2015-12-15.
 */
module.exports = function (io, options, socket, reqData, userData, eventName, eventResult, eventLog) {
    var util = options.container.get('util');

    eventLog.push([
        userData.account.username,
        '은(는), 스테미너가 바닥났다... 최대 HP가 감소했다.'
    ].join(''));

    var isDeath = false;

    var damage = util.dice(parseInt(userData.account.maxHealth / 10)) + parseInt(userData.account.maxHealth / 10);
    if (10 > damage) {
        damage = 10;
    }

    userData.account.stamina = util.dice(parseInt(util.getMaxStamina() / 10)) + parseInt(util.getMaxStamina() / 4);
    userData.account.maxHealth -= damage;

    if (userData.account.health > userData.account.maxHealth) {
        userData.account.health = userData.account.maxHealth;
    }

    if (0 >= userData.account.maxHealth) {
        isDeath = true;
    }

    return {
        isDeath: isDeath,
        userData: userData,
        eventLog: eventLog
    };
};