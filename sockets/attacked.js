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
            '번)이(가) 갑자기 습격해 왔다!'
        ].join(''));
    }

    require('./finalize')(io, options, socket, reqData, userData, eventName, eventResult, eventLog);
};