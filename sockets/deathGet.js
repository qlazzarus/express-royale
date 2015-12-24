/**
 * Created by monoless on 2015-12-16.
 */
module.exports = function (io, options, socket, req, res, eventName, eventResult, eventLog) {
    var async = require('async');
    var util = options.container.get('util');
    var userModel = options.models.getModel('user');
    var newsModel = options.models.getModel('news');

    if (typeof eventLog === 'string') {
        eventLog = [eventLog];
    }

    eventName = 'deathGet';
    eventLog.push([res.enemy.username, '의 시체를 발견했다.'].join(''));
    eventLog.push(util.getCorpseMessage(res.enemy.deathCause, res.enemy.deathCause));
    eventLog.push('배낭 속을 뒤져볼까....');

    require('./finalize')(io, options, socket, req, res, eventName, eventResult, eventLog);
};