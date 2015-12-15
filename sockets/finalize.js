/**
 * Created by monoless on 2015-12-15.
 */
module.exports = function(io, options, socket, reqData, userData, eventName, eventResult, eventLog) {
    // util
    var util = options.container.get('util');

    if (reqData.queueId) {
        userData.queueId = reqData.queueId;
    }

    userData.type = eventName;
    userData.result = eventResult;
    userData.log = eventLog;
    userData.place = util.arrangePlaceInfo();
    userData.config = {
        expPerSkillLevel: util.getExpPerSkillLevel(),
        skills: util.getSkills(),
        tactics: util.getTactics()
    };

    if (typeof userData.account != 'undefined') {
        // user status save
        userData.account.save();

        var itemList = ['item0', 'item1', 'item2', 'item3', 'item4', 'item5'];
        for (var i in itemList) {
            userData.account[itemList[i]].point = Math.abs(userData.account[itemList[i]].point);
        }

        userData.itemList = util.getItem([
            userData.account.weapon.idx,
            userData.account.armor.head.idx,
            userData.account.armor.body.idx,
            userData.account.armor.arm.idx,
            userData.account.armor.foot.idx,
            userData.account.armor.accessory.idx,
            userData.account.item0.idx,
            userData.account.item1.idx,
            userData.account.item2.idx,
            userData.account.item3.idx,
            userData.account.item4.idx,
            userData.account.item5.idx
        ]);
    }

    socket.emit('recv', userData);
};