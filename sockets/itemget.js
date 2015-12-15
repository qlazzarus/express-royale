/**
 * Created by monoless on 2015-12-15.
 */
module.exports = function (io, options, socket, reqData, userData, eventName, eventResult, eventLog) {
    var util = options.container.get('util');

    var place = {};
    var places = userData.place;
    for (var i in places) {
        place = places[i];
        if (reqData.value === place.idx) {
            break;
        }
    }

    var isDeath = false;
    var itemLength = place.items.length;

    if (itemLength < 0) {
        eventLog.push('이제, 이 지역에는 아무것도 없는건가...?');
    } else {
        var randomId = util.dice(itemLength - 1);
        var itemId = place.items[randomId];
        var itemInfo = util.getItem(itemId);

        var targetItemSlot = util.getEmptyItemSlot(
            userData.account.item0,
            userData.account.item1,
            userData.account.item2,
            userData.account.item3,
            userData.account.item4,
            userData.account.item5
        );

        var ammoSlot = null;
        if (-1 !== ['etc8', 'etc9', 'etc10', 'etc12', 'etc13', 'etc14', 'etc15', 'etc16'].indexOf(itemInfo.idx)) {
            ammoSlot = util.findItemSlot(
                itemInfo.idx,
                userData.account.item0,
                userData.account.item1,
                userData.account.item2,
                userData.account.item3,
                userData.account.item4,
                userData.account.item5
            );
        }

        if ('trap' === itemInfo.equip && true === itemInfo.deploy) {
            var attackPoint = parseInt(itemInfo.point / 2);
            attackPoint = util.dice(attackPoint) + attackPoint;
            eventLog.push([
                '덫이다! 설치되어 있던 ',
                itemInfo.name,
                '에 상처를 입어, <strong class="red">',
                attackPoint,
                '의 데미지</strong>를 입었다!'
            ].join(''));

            userData.account.health -= attackPoint;
            if (0 >= userData.account.health) {
                isDeath = true;
            }

            // 아이템 삭제
            place.items.splice(randomId, 1);
            place.save();
        } else if (null !== ammoSlot) {
            eventLog.push([itemInfo.name, '을(를) 발견했다. 분명 뭔가에 쓸 수 있겠지.'].join(''));
            userData.account[ammoSlot].endurance += itemInfo.endurance;

            // 아이템 삭제
            place.items.splice(randomId, 1);
            place.save();
        } else if (null === targetItemSlot) {
            eventLog.push([
                itemInfo.name,
                '을(를) 발견했다. 그러나, 더 이상 가방에 들어가지 않는다.'
            ].join(''));

            eventLog.push([
                itemInfo.name,
                '을(를) 포기했다...'
            ].join(''));
        } else {
            var itemDesc = '분명 뭔가에 쓸 수 있겠지.';
            if ('health' === itemInfo.equip) {
                itemDesc = '먹으면 체력이 회복될것 같아.';
            } else if ('stamina' === itemInfo.equip) {
                itemDesc = '먹으면 스테미너가 회복될것 같아.';
            } else if ('weapon' === itemInfo.equip) {
                itemDesc = '이건 무기가 될듯해.';
            } else if ('armor' === itemInfo.equip && 'accessory' === itemInfo.type) {
                itemDesc = '이건 몸에 달수 있을것 같아.';
            } else if ('armor' === itemInfo.equip) {
                itemDesc = '이건 방어구가 될듯해.';
            } else if ('trap' === itemInfo.equip) {
                itemDesc = '이것으로 덫을 설치할 수 있을것 같아.';
            }

            eventLog.push([itemInfo.name, '을(를) 발견했다. ', itemDesc].join(''));

            userData.account[targetItemSlot] = {
                idx: itemInfo.id,
                point: itemInfo.point,
                endurance: itemInfo.endurance
            };

            // 아이템 삭제
            place.items.splice(randomId, 1);
            place.save();
        }
    }

    if (false === isDeath) {
        require('./finalize')(io, options, socket, reqData, userData, eventName, eventResult, eventLog);
    } else {
        // TODO 사망
    }
};