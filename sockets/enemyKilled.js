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

    if (0 >= res.enemy.health) {
        async.waterfall([
            function (callback) {
                //userModel.count({npc: false}, callback);
                userModel.count({}, callback);
            },

            function (counted, callback) {
                eventLog.push([
                    '<strong class="red">',
                    res.enemy.username,
                    '(',
                    res.enemy.groupName,
                    ' ',
                    0 == res.enemy.userGender ? '남자' : '여자',
                    res.enemy.studentNo,
                    '번)을(를) 살해했다.【남은 인원 ',
                    counted,
                    '명】</strong>'
                ]);
                /*
                 eventLog.push([
                 res.enemy.username,
                 '(',
                 res.enemy.groupName,
                 ' ',
                 0 == res.enemy.userGender ? '남자' : '여자',
                 res.enemy.studentNo,
                 '번)을(를) 발견했다!'
                 ].join(''));
                 */
                /*
                 $w_com = int(rand(7)) ;
                 $log = ($log . "<font color=\"red\"><b>$w_f_name $w_l_name\($w_cl $w_sex$w_no번\)을\(를\) 살해했다\.【남은 인원 $mem명】</b></font><br>") ;

                 if (length($w_dmes) > 1) {
                 $log = ($log . "<font color=\"yellow\"><b>$w_f_name $w_l_name『$w_dmes』</b></font><br>") ;
                 }
                 if (length($msg) > 1) {
                 $log = ($log . "<font color=\"lime\"><b>$f_name $l_name『$msg』</b></font><br>") ;
                 }
                 */
                res.enemy.health = 0;
                res.account.killCount += 1;
            },

            function (counted) {
                if (1 < counted) {
                    require('./deathGet')(io, options, socket, req, res, eventName, eventResult, eventLog);
                } else {
                    // TODO 대회우승
                }
            }
        ]);
    } else {
        require('./finalize')(io, options, socket, req, res, eventName, eventResult, eventLog);
    }
};