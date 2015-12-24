/**
 * Created by monoless on 2015-12-16.
 */
/*
module.exports = function (io, options, socket, req, res, eventName, eventResult, eventLog) {
    var async = require('async');
    var util = options.container.get('util');
    var userModel = options.models.getModel('user');
    var newsModel = options.models.getModel('news');

    if (typeof eventLog === 'string') {
        eventLog = [eventLog];
    }

    if (0 >= res.enemy.health) {
        eventLog.push('enemy killed');

        async.waterfall([
            function (callback) {
                 $w_com = int(rand(7)) ;
                 $log = ($log . "<font color=\"red\"><b>$w_f_name $w_l_name\($w_cl $w_sex$w_no번\)을\(를\) 살해했다\.【남은 인원 $mem명】</b></font><br>") ;

                 if (length($w_dmes) > 1) {
                 $log = ($log . "<font color=\"yellow\"><b>$w_f_name $w_l_name『$w_dmes』</b></font><br>") ;
                 }
                 if (length($msg) > 1) {
                 $log = ($log . "<font color=\"lime\"><b>$f_name $l_name『$msg』</b></font><br>") ;
                 }
                res.enemy.health = 0;

                res.account.killCount += 1;
            },

            function (callback) {
                userModel.count({}, callback);
            },

            function (counted) {
                if (1 < counted) {
                    require('./finalize')(io, options, socket, req, res, eventName, eventResult, eventLog);
                } else {
                    // TODO 대회우승
                }
            }
        ]);
    } else {
        require('./finalize')(io, options, socket, req, res, eventName, eventResult, eventLog);
    }

};
*/