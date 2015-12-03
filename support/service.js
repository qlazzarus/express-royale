/**
 * Created by monoless on 2015-12-03.
 */
module.exports = function () {
    var that = this;
    var async = require('async');

    this.createServerFlag = function (serverModel, status, started) {
        var server = new serverModel({
            status: status,
            started: started
        });

        server.save(function (err) {
            throw err;
        });

        return server;
    };

    this.checkSignup = function (userModel, serverModel, remoteAddress, respawnTime, maxRecruitTime,
                                 maxRecruitMember, callback) {
        var resultStatus = 0;   // normal;
        var options = {};

        async.parallel({
            userCountAll: function (cb) {
                userModel.count({}).exec(cb);
            },
            userFindByIp: function (cb) {
                serverModel.find({ip: remoteAddress}).exec(cb);
            },
            flag: function (cb) {
                serverModel.findOne({}).exec(cb);
            }
        }, function (err, result) {
            if (err) {
                throw err;
            }

            if (!result.flag) {
                result.flag = that.createServerFlag('start', new Date());
            }

            var timeStamp = Date.now();

            var dateDiff = timeStamp - new Date(result.flag.started).getTime();
            var isExist = false;
            var isDead = false;
            var rebornTime = new Date();

            for (var i = 0; result.userFindByIp.length; i++) {
                var current = result.userFindByIp[i];
                if (0 >= current.hp && respawnTime > timeStamp - new Date(current.deadAt).getTime()) {
                    isExist = false;
                    isDead = false;
                } else if (0 >= current.hp) {
                    isExist = true;
                    isDead = true;
                    rebornTime = current.deadAt;
                    break;
                } else {
                    isExist = true;
                    break;
                }
            }

            options.rebornTime = rebornTime;

            if ('start' !== result.flag.status || maxRecruitTime < dateDiff) {
                resultStatus = -1;
            } else if (maxRecruitMember <= result.userCountAll) {
                resultStatus = -2;
            } else if (true === isExist && true === isDead) {
                resultStatus = -3;
            } else if (true === isExist) {
                resultStatus = -4;
            }

            callback(null, resultStatus, options);
        });
    };

    this.validSignup = function (userModel, serverModel, remoteAddress, respawnTime, maxRecruitTime,
                                 maxRecruitMember, expressRequest, formValidation, gameIcons, classPerMan, callback) {
        async.parallel({
            beforeCheck: function (cb) {
                that.checkSignup(userModel, serverModel, remoteAddress, respawnTime, maxRecruitTime,
                    maxRecruitMember, cb);
            },
            formCheck: function (cb) {
                expressRequest.checkBody(formValidation(expressRequest.body.password));
                var error = expressRequest.validationErrors();
                if (!error) {
                    error = [];
                }

                cb(null, error);
            },
            iconGenderCheck: function (cb) {
                var icon = {};
                var iconLength = gameIcons.length;
                var status = true;
                for (var i = 0; i < iconLength; i++) {
                    icon = gameIcons[i];
                    if (icon.path === expressRequest.body.userIcon) {
                        break;
                    }
                }

                if (0 == expressRequest.body.userGender && 'male' !== icon.gender) {
                    status = false;
                }

                cb(null, status);
            },
            maleCount: function (cb) {
                userModel.count({userGender: 0}).exec(cb);
            },
            femaleCount: function (cb) {
                userModel.count({userGender: 1}).exec(cb);
            }
        }, function (err, result) {
            var resultStatus = 0;   // normal
            var options = {};

            if (0 !== result.beforeCheck[0]) {
                resultStatus = result.beforeCheck[0];
                options = result.beforeCheck[1];
            } else if (0 < result.formCheck.length) {
                resultStatus = -5;
                options = result.formCheck;
            } else if (false === result.iconGenderCheck) {
                resultStatus = -6;
            } else if (0 == expressRequest.body.userGender && classPerMan < result.maleCount) {
                resultStatus = -7;
            } else if (1 == expressRequest.body.userGender && classPerMan < result.femaleCount) {
                resultStatus = -8;
            }

            callback(null, resultStatus, options);
        });
    };

    this.signup = function (userModel, remoteAddress, expressRequest, expressResponse) {
        userModel.register(new userModel({
            username: expressRequest.body.username,
            userGender: expressRequest.body.userGender,
            userIcon: expressRequest.body.userIcon
        }), expressRequest.body.password, function(err, user){
            if (err) {
                throw err;
            } else {
                expressResponse.redirect('/intro');
            }
        });
    };
};