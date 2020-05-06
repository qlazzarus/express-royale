/**
 * Created by monoless on 2015-12-15.
 */
module.exports = function (io, options, socket, req, res) {
    var util = options.container.get('util');

    var eventName = 'info';
    var eventLog = [];
    var isDeath = false;

    var pcSlot = util.findItemSlotByEquip(
        'mobilepc',
        res.account.item0,
        res.account.item1,
        res.account.item2,
        res.account.item3,
        res.account.item4,
        res.account.item5
    );

    if (null !== pcSlot) {
        var pc = res.account[pcSlot];
        if (0 >= pc.endurance) {
            eventLog.push('모바일PC에 전원이 들어오지 않는다. 배터리가 없는걸까...');
        } else {
            res.account[pcSlot].endurance -= 1;

            var hackPoint = 0;
            var hackDice = util.dice(10);
            if (12 === res.account.clubId) {
                hackPoint += 5;
            }

            if (hackDice <= hackPoint) {
                eventLog.push('해킹 성공! 모든 금지지역이 해제되었다!!');
                res.server.status = 'hacking';
                res.server.save();

                for (var i in res.place) {
                    var place = res.place[i];
                    place.restrict = false;
                    place.restrictReserve = false;
                    place.save();
                }
            } else {
                eventLog.push('해킹은 실패했다...');
            }

            if (hackDice >= 9) {
                res.account[pcSlot] = {idx: '', endurance: 0, point: 0};
                eventLog.push('왜이러지! 장치가 부서지고 말았다.');

                if (util.dice(10) >= 9) {
                    eventLog.push('...뭐지?...목걸이에서 경고음이...!?');
                    res.account.health = 0;
                    isDeath = true;
                }
            } else if (0 >= res.account[pcSlot].endurance) {
                eventLog.push('모바일PC의 배터리를 다 써버렸다.');
            }
        }
    }

    if (true === isDeath) {
        require('./userKilled')(io, options, socket, req, res, 'hackingFailed', true, eventLog);
    } else {
        require('./finalize')(io, options, socket, req, res, eventName, true, eventLog);
    }
};