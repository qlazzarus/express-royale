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

        winner = winnerModel({
            status: eventName,
            started: res.server.started,
            ended: new Date(),
            username: res.account.username,
            userGender: res.account.userGender,
            userIcon: res.account.userIcon,
            message: res.account.message,
            messageDying: res.account.messageDying,
            messageComment: res.account.messageComment,
            attack: res.account.attack,
            defence: res.account.defence,
            health: res.account.health,
            maxHealth: res.account.maxHealth,
            stamina: res.account.stamina,
            killCount: res.account.killCount,
            level: res.account.level,
            requireExp: res.account.requireExp,
            injured: res.account.injured,
            groupName: res.account.groupName,
            studentNo: res.account.studentNo,
            clubId: res.account.clubId,
            clubName: res.account.clubName,
            tactics: res.account.tactics,
            shotSkill: res.account.shotSkill,
            cutSkill: res.account.cutSkill,
            throwSkill: res.account.throwSkill,
            fistSkill: res.account.fistSkill,
            bowSkill: res.account.bowSkill,
            meleeSkill: res.account.meleeSkill,
            bombSkill: res.account.bombSkill,
            pokeSkill: res.account.pokeSkill,
            weapon: res.account.weapon,
            armor: res.account.armor,
            item0: res.account.item0,
            item1: res.account.item1,
            item2: res.account.item2,
            item3: res.account.item3,
            item4: res.account.item4,
            item5: res.account.item5
        });
        winner.save();

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

                winner = winnerModel({
                    status: 'ending',
                    started: res.server.started,
                    ended: new Date(),
                    username: user.username,
                    userGender: user.userGender,
                    userIcon: user.userIcon,
                    message: user.message,
                    messageDying: user.messageDying,
                    messageComment: user.messageComment,
                    attack: user.attack,
                    defence: user.defence,
                    health: user.health,
                    maxHealth: user.maxHealth,
                    stamina: user.stamina,
                    killCount: user.killCount,
                    level: user.level,
                    requireExp: user.requireExp,
                    injured: user.injured,
                    groupName: user.groupName,
                    studentNo: user.studentNo,
                    clubId: user.clubId,
                    clubName: user.clubName,
                    tactics: user.tactics,
                    shotSkill: user.shotSkill,
                    cutSkill: user.cutSkill,
                    throwSkill: user.throwSkill,
                    fistSkill: user.fistSkill,
                    bowSkill: user.bowSkill,
                    meleeSkill: user.meleeSkill,
                    bombSkill: user.bombSkill,
                    pokeSkill: user.pokeSkill,
                    weapon: user.weapon,
                    armor: user.armor,
                    item0: user.item0,
                    item1: user.item1,
                    item2: user.item2,
                    item3: user.item3,
                    item4: user.item4,
                    item5: user.item5
                });
                winner.save();

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

        winner = winnerModel({
            status: eventName,
            started: res.server.started,
            ended: new Date(),
            username: res.account.username,
            userGender: res.account.userGender,
            userIcon: res.account.userIcon,
            message: res.account.message,
            messageDying: res.account.messageDying,
            messageComment: res.account.messageComment,
            attack: res.account.attack,
            defence: res.account.defence,
            health: res.account.health,
            maxHealth: res.account.maxHealth,
            stamina: res.account.stamina,
            killCount: res.account.killCount,
            level: res.account.level,
            requireExp: res.account.requireExp,
            injured: res.account.injured,
            groupName: res.account.groupName,
            studentNo: res.account.studentNo,
            clubId: res.account.clubId,
            clubName: res.account.clubName,
            tactics: res.account.tactics,
            shotSkill: res.account.shotSkill,
            cutSkill: res.account.cutSkill,
            throwSkill: res.account.throwSkill,
            fistSkill: res.account.fistSkill,
            bowSkill: res.account.bowSkill,
            meleeSkill: res.account.meleeSkill,
            bombSkill: res.account.bombSkill,
            pokeSkill: res.account.pokeSkill,
            weapon: res.account.weapon,
            armor: res.account.armor,
            item0: res.account.item0,
            item1: res.account.item1,
            item2: res.account.item2,
            item3: res.account.item3,
            item4: res.account.item4,
            item5: res.account.item5
        });
        winner.save();
    }

    require('./finalize')(io, options, socket, req, res, eventName, eventResult, eventLog);
};