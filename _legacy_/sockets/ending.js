/**
 * Created by monoless on 2015-12-16.
 */
module.exports = function (io, options, socket, req, res, eventName, eventResult, eventLog) {
    var util = options.container.get('util');
    var userModel = options.models.getModel('user');
    var newsModel = options.models.getModel('news');
    var winnerModel = options.models.getModel('winner');

    var news, winner;

    if (typeof eventLog === 'string') {
        eventLog = [eventLog];
    }

    if ('hackingSuccess' === eventName) {
        res.server.status = eventName;
        res.server.winner = res.account.username;
        res.server.save();

        news = new newsModel({
            registerAt: new Date(),
            type: 'HACKING_SUCCESS',
            message: res.account.messageDying,
            victim: {
                username: res.account.username,
                userGender: res.account.userGender,
                groupName: res.account.groupName,
                studentNo: res.account.studentNo
            }
        });
        news.save();

        util.setWinner(winnerModel, eventName, res.server.started, res.account);

        socket.broadcast.emit('recv', {
            type: 'broadcastEnding',
            log: '갑자기 사이렌 소리가 귀를 때렸다.',
            except: ''
        });
    } else if ('endingOther' === eventName) {
        userModel.findOne({npc: false, deathAt:null, username: {$ne: res.account.username}}, function (err, user) {
            if (err) {
                console.log(err);
                throw new Error(err);
            } else {
                res.server.status = 'ending';
                res.server.winner = user.username;
                res.server.save();

                news = new newsModel({
                    registerAt: new Date(),
                    type: 'ENDING',
                    message: user.messageDying,
                    victim: {
                        username: user.username,
                        userGender: user.userGender,
                        groupName: user.groupName,
                        studentNo: user.studentNo
                    }
                });

                news.save();

                util.setWinner(winnerModel, 'ending', res.server.started, user);

                socket.broadcast.emit('recv', {
                    type: 'broadcastEnding',
                    log: '갑자기 사이렌 소리가 귀를 때렸다.',
                    except: ''
                });
            }
        });
    } else {
        res.server.status = 'ending';
        res.server.winner = res.account.username;
        res.server.save();

        news = new newsModel({
            registerAt: new Date(),
            type: 'ENDING',
            message: res.account.messageDying,
            victim: {
                username: res.account.username,
                userGender: res.account.userGender,
                groupName: res.account.groupName,
                studentNo: res.account.studentNo
            }
        });

        news.save();

        util.setWinner(winnerModel, 'ending', res.server.started, res.account);
    }

    require('./finalize')(io, options, socket, req, res, eventName, eventResult, eventLog);
};