/**
 * Created by monoless on 2015-12-16.
 */
module.exports = function(io, options, socket, req, res, eventName, eventResult, eventLog){
    var util = options.container.get('util');

    if (0 < res.enemy.health) {
        eventLog.push([
            res.enemy.username,
            '(',
            res.enemy.groupName,
            ' ',
            0 == res.enemy.userGender ? '남자' : '여자',
            res.enemy.studentNo,
            '번)을(를) 발견했다!'
        ].join(''));

        eventLog.push([
            res.enemy.username,
            '은(는) 이쪽을 눈치채지 못한 것 같아...'
        ].join(''));

        eventLog.push('자, 어떻게 하지...');
    }

    require('./finalize')(io, options, socket, req, res, 'attackStart', eventResult, eventLog);
};