/**
 * Created by monoless on 2015-12-16.
 */
module.exports = function(io, options, socket, reqData, userData, eventName, eventResult, eventLog){
    var util = options.container.get('util');

    if (0 < userData.enemy.health) {
        eventLog.push([
            userData.enemy.username,
            '(',
            userData.enemy.groupName,
            ' ',
            0 == userData.enemy.userGender ? '남자' : '여자',
            userData.enemy.studentNo,
            '번)을(를) 발견했다!'
        ].join(''));

        eventLog.push([
            userData.enemy.username,
            '은(는) 이쪽을 눈치채지 못한 것 같아...'
        ].join(''));

        eventLog.push('자, 어떻게 하지...');
    }

    require('./finalize')(io, options, socket, reqData, userData, 'attackStart', eventResult, eventLog);
};