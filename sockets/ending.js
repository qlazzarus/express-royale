/**
 * Created by monoless on 2015-12-16.
 */
module.exports = function (io, options, socket, req, res, eventName, eventResult, eventLog) {
    var util = options.container.get('util');
    var newsModel = options.models.getModel('news');

    if (typeof eventLog === 'string') {
        eventLog = [eventLog];
    }

    if ('hackingSuccess' === eventName) {
        res.server.status = eventName;
        res.server.save();

        var news = new newsModel({
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

        socket.broadcast.emit('recv', {
            type: 'broadcast',
            log: 'hacking',
            except: ''
        });
    }

    require('./finalize')(io, options, socket, req, res, eventName, eventResult, eventLog);
};