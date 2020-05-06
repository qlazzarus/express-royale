/**
 * Created by monoless on 2015-12-15.
 */
module.exports = function(io, options, socket, req, res, eventName, eventResult, eventLog){
    var util = options.container.get('util');

    var isDeath = false;
    var eventDice = util.dice(20);
    var damageDice = util.dice(5) + 5;
    if (17 < eventDice) {
        if (-1 !== [2, 12, 18].indexOf(res.account.place)) {
            eventLog.push('문득, 하늘을 보자, 새떼들이다!');
            if (18 === eventDice) {
                eventLog.push('새에게 습격받아, 머리를 다쳤다!');
                if (-1 === res.account.injured.indexOf('head')) {
                    res.account.injured.push('head');
                }
            } else if (19 === eventDice) {
                eventLog.push(['새에게 습격받아, <strong class="red">', damageDice, '데미지</strong> 를 입었다!'].join(''));
                res.account.health -= damageDice;
                if (0 >= res.account.health) {
                    isDeath = true;
                }
            } else {
                eventLog.push('후우, 간신히 쫓아냈다...');
            }
        } else if (10 == res.account.place) {
            eventLog.push('이런, 토사가 쏟아졌다!');
            if (18 === eventDice) {
                eventLog.push('간신히 피했지만, 낙석에 발을 다쳤다!');
                if (-1 === res.account.injured.indexOf('foot')) {
                    res.account.injured.push('foot');
                }
            } else if (19 === eventDice) {
                eventLog.push(['낙석에 의해, <strong class="red">', damageDice, '데미지</strong> 를 입었다!'].join(''));
                res.account.health -= damageDice;
                if (0 >= res.account.health) {
                    isDeath = true;
                }
            } else {
                eventLog.push('후우, 간신히 피했다...');
            }
        } else if (16 == res.account.place) {
            eventLog.push('갑자기, 들개가 습격해 왔다!');
            if (18 === eventDice) {
                eventLog.push('팔을 물려, 팔을 다쳤다!');
                if (-1 === res.account.injured.indexOf('arm')) {
                    res.account.injured.push('arm');
                }
            } else if (19 === eventDice) {
                eventLog.push(['들개에게 습격받아, <strong class="red">', damageDice, '데미지</strong> 를 입었다!'].join(''));
                res.account.health -= damageDice;
                if (0 >= res.account.health) {
                    isDeath = true;
                }
            } else {
                eventLog.push('후우, 간신히 피했다...');
            }
        } else if (17 == res.account.place) {
            eventLog.push('이런, 발이 미끌어진다!');
            if (18 <= eventDice) {
                damageDice += 10;
                eventLog.push('연못 안으로 떨어졌지만, 간신히 기어 올라왔다!');
                eventLog.push(['스테미너를 <strong class="red">', damageDice, '포인트</strong> 를 소비했다!'].join(''));
                res.account.stamina -= damageDice;

                if (0 >= res.account.stamina) {
                    var drainStatus = require('./drain')(io, options, socket, req, res, eventName, eventResult, eventLog);
                    isDeath = drainStatus.isDeath;
                    res = drainStatus.userData;
                    eventLog = drainStatus.eventLog;
                }
            } else {
                eventLog.push('후우, 간신히 미끌어지지 않았다...');
            }
        }
    }

    if (false === isDeath) {
        require('./finalize')(io, options, socket, req, res, eventName, eventResult, eventLog);
    } else {
        require('./userKilled')(io, options, socket, req, res, eventName, eventResult, eventLog);
    }
};