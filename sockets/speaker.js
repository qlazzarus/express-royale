/**
 * Created by monoless on 2015-12-15.
 */
module.exports = function (io, options, socket, req, res) {
    var util = options.container.get('util');

    var eventName = 'info';
    var eventLog = [];

    var newsModel = options.models.getModel('news');
    var speakerSlot = util.findItemSlotByEquip(
        'speaker',
        res.account.item0,
        res.account.item1,
        res.account.item2,
        res.account.item3,
        res.account.item4,
        res.account.item5
    );

    if (typeof req.value !== 'undefined' && null !== speakerSlot) {
        var message = req.value[0];
        var placeName = util.getPlaceName('place' + res.account.place);

        socket.broadcast.emit('recv', {
            type: 'broadcast',
            log: [
                '<strong style="color:#ffff00;">',
                placeName,
                ' 쪽에서 ',
                res.account.username,
                '의 목소리가 들렸다...</strong><br /><strong style="color:#00ff00;">『',
                message, '』</strong>'
            ].join('')
        });

        eventLog.push(message);
        eventLog.push('확실히 전해졌을까?');

        var news = new newsModel({
            registerAt: new Date(),
            type: 'SPEAKER',
            message: message,
            victim: {
                username: res.account.username,
                userGender: res.account.userGender,
                groupName: res.account.groupName,
                studentNo: res.account.studentNo
            }
        });

        news.save();
    }

    require('./finalize')(io, options, socket, req, res, eventName, true, eventLog);
};