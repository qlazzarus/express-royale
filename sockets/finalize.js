/**
 * Created by monoless on 2015-12-15.
 */
module.exports = function(io, options, socket, req, res, eventName, eventResult, eventLog) {
    // util
    var util = options.container.get('util');

    if (typeof eventLog === 'string') {
        eventLog = [eventLog];
    }

    if (-1 === ['health', 'stamina'].indexOf(eventName) && -1 !== [5, 6].indexOf(res.account.status)) {
        // 치료 + 수면
        eventLog.push(util.setRecover(res.account));
        res.account.status = 0;
    }

    if (req.queueId) {
        res.queueId = req.queueId;
    }

    res.type = eventName;
    res.result = eventResult;
    res.log = eventLog;
    res.place = util.arrangePlaceInfo();
    res.config = {
        expPerSkillLevel: util.getExpPerSkillLevel(),
        skills: util.getSkills(),
        tactics: util.getTactics(),
        healthRequireSecond: util.getHealthRequireSecond(),
        staminaRequireSecond: util.getStaminaRequireSecond()
    };

    if (typeof res.account != 'undefined') {
        // user status save
        res.account.save();

        var itemList = ['item0', 'item1', 'item2', 'item3', 'item4', 'item5'];
        for (var i in itemList) {
            res.account[itemList[i]].point = Math.abs(res.account[itemList[i]].point);
        }

        res.itemList = util.getItem([
            res.account.weapon.idx,
            res.account.armor.head.idx,
            res.account.armor.body.idx,
            res.account.armor.arm.idx,
            res.account.armor.foot.idx,
            res.account.armor.accessory.idx,
            res.account.item0.idx,
            res.account.item1.idx,
            res.account.item2.idx,
            res.account.item3.idx,
            res.account.item4.idx,
            res.account.item5.idx
        ]);
    }

    if (typeof res.enemy != 'undefined') {
        // enemy status save
        res.enemy.save();

        var enemyItemList = util.getItem([
            res.enemy.weapon.idx,
            res.enemy.armor.body.idx
        ]);

        if (typeof res.itemList == 'undefined') {
            res.itemList = enemyItemList;
        } else {
            for (var i in enemyItemList) {
                res.itemList[i] = enemyItemList[i];
            }
        }

        var healthStatus = util.getHealthStatus(res.enemy.maxHealth, res.enemy.health);
        res.enemy = {
            username: res.enemy.username,
            userIcon: res.enemy.userIcon,
            userGender: res.enemy.userGender,
            groupName: res.enemy.groupName,
            studentNo: res.enemy.studentNo,
            healthStatus: healthStatus.name,
            healthStatusStyle: healthStatus.color,
            weapon: {idx: res.enemy.weapon.idx},
            armor: {body: {idx: res.enemy.armor.body.idx}},
            killCount: res.enemy.killCount
        };

    }

    socket.emit('recv', res);
};