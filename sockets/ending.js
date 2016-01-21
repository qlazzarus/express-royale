/**
 * Created by monoless on 2015-12-16.
 */
module.exports = function (io, options, socket, req, res, eventName, eventResult, eventLog) {
    if (typeof eventLog === 'string') {
        eventLog = [eventLog];
    }

    if ('hackingSuccess' === eventName) {
        res.server.status = eventName;
        res.server.winner = res.account.username;
        res.server.save();

        options.repositories.addWinner(null, eventName, res.server.started, new Date(), res.account);
        options.repositories.addNews(
            null,
            new Date(),
            'HACKING_SUCCESS',
            res.account.messageDying,
            undefined,
            {
                username: res.account.username,
                userGender: res.account.userGender,
                groupName: res.account.groupName,
                studentNo: res.account.studentNo
            }
        );

        socket.broadcast.emit('recv', {
            type: 'broadcastEnding',
            log: '갑자기 사이렌 소리가 귀를 때렸다.',
            except: ''
        });
    } else if ('endingOther' === eventName) {
        options.repositories.getUser(function(user){
            res.server.status = 'ending';
            res.server.winner = user.username;
            res.server.save();

            options.repositories.addWinner(null, 'ending', res.server.started, new Date(), user);
            options.repositories.addNews(
                null,
                new Date(),
                'ENDING',
                user.messageDying,
                undefined,
                {
                    username: user.username,
                    userGender: user.userGender,
                    groupName: user.groupName,
                    studentNo: user.studentNo
                }
            );

            socket.broadcast.emit('recv', {
                type: 'broadcastEnding',
                log: '갑자기 사이렌 소리가 귀를 때렸다.',
                except: ''
            });
        }, {npc: false, deathAt: null, username: {$ne: res.account.username}});
    } else {
        res.server.status = 'ending';
        res.server.winner = res.account.username;
        res.server.save();

        options.repositories.addWinner(null, 'ending', res.server.started, new Date(), res.account);
        options.repositories.addNews(
            null,
            new Date(),
            'ENDING',
            res.account.messageDying,
            undefined,
            {
                username: res.account.username,
                userGender: res.account.userGender,
                groupName: res.account.groupName,
                studentNo: res.account.studentNo
            }
        );
    }

    require('./finalize')(io, options, socket, req, res, eventName, eventResult, eventLog);
};