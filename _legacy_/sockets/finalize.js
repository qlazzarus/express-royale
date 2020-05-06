/**
 * Created by monoless on 2015-12-15.
 */
module.exports = function(io, options, socket, req, res, eventName, eventResult, eventLog) {
    var util = options.container.get('util');

    if (typeof eventLog === 'string') {
        eventLog = [eventLog];
    }

    if (req.queueId) {
        res.queueId = req.queueId;
    }

    res.type = eventName;
    res.result = eventResult;
    res.log = eventLog;
    res.place = util.arrangePlaceInfo(res.place);
    res.config = {
        expPerSkillLevel: util.getExpPerSkillLevel(),
        skills: util.getSkills(),
        tactics: util.getTactics(),
        staminaRecoverInterval: util.getStaminaRecoverInterval(),
        staminaRecoverIncrease: util.getStaminaRecoverIncrease(),
        healthRecoverInterval: util.getHealthRecoverInterval(),
        healthRecoverIncrease: util.getHealthRecoverIncrease()
    };

    if (typeof res.account != 'undefined') {
        if (-1 === ['health', 'stamina'].indexOf(eventName) && -1 !== [5, 6].indexOf(res.account.status)) {
            // 치료 + 수면
            eventLog.push(util.setRecover(res.account));
            res.account.status = 0;
        }

        // user status save
        res.account.save();

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
            res.enemy.armor.head.idx,
            res.enemy.armor.body.idx,
            res.enemy.armor.arm.idx,
            res.enemy.armor.foot.idx,
            res.enemy.armor.accessory.idx,
            res.enemy.item0.idx,
            res.enemy.item1.idx,
            res.enemy.item2.idx,
            res.enemy.item3.idx,
            res.enemy.item4.idx,
            res.enemy.item5.idx
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
            weapon: res.enemy.weapon,
            armor: res.enemy.armor,
            item0: res.enemy.item0,
            item1: res.enemy.item1,
            item2: res.enemy.item2,
            item3: res.enemy.item3,
            item4: res.enemy.item4,
            item5: res.enemy.item5,
            killCount: res.enemy.killCount
        };
    }

    if (0 >= res.account.health && -1 === ['killedByTrap'].indexOf(eventName)) {
        res.type = 'killed';
    }

    socket.emit('recv', res);
};