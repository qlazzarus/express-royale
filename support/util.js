/**
 * Created by monoless on 2015-12-08.
 */
module.exports = (function () {
    var itemCollection = {};

    /**
     * 아이템 콜렉션 리턴
     *
     * @returns {{}}
     */
    function getItemCollection() {
        return itemCollection;
    }


    /**
     * 아이템 콜렉션 저장
     *
     * @param collection
     */
    function setItemCollection(collection) {
        itemCollection = collection;
    }


    /**
     * 아이템 리턴
     *
     * @param itemId
     * @returns {*}
     */
    function getItem(itemId) {
        if (itemId instanceof Array) {
            var result = {};
            for (var i in itemId) {
                var item = getItem(itemId[i]);
                if (typeof item !== 'undefined') {
                    result[itemId[i]] = item;
                }
            }

            return result;
        } else {
            return itemCollection[itemId];
        }
    }


    /**
     * 주사위 (랜덤)
     *
     * @param maxValue
     * @returns {number}
     */
    function dice(maxValue) {
        return Math.floor(Math.random() * maxValue);
    }


    /**
     * 아이템 랜덤으로 뽑아오기
     *
     * @param itemList
     * @param itemObject
     * @returns {*}
     */
    function getRandomItem(itemList, itemObject) {
        var itemLength = itemList.length;
        var itemId = itemList[dice(itemLength)];

        return itemObject[itemId];
    }


    /**
     * 포인트 랜덤으로 더하기
     *
     * @param basic
     * @param random
     * @returns {*}
     */
    function getPoint(basic, random) {
        return dice(random) + basic;
    }


    /**
     * 동아리에 따른 능력치 결정
     *
     * @param clubId
     * @param expPerSkillLevel
     * @returns {{cutSkill: number, throwSkill: number, fistSkill: number, meleeSkill: number, bombSkill: number, pokeSkill: number, bowSkill: number, shotSkill: number}}
     */
    function getSkillByClubId(clubId, expPerSkillLevel) {
        var result = {
            cutSkill: 0,
            throwSkill: 0,
            fistSkill: 0,
            meleeSkill: 0,
            bombSkill: 0,
            pokeSkill: 0,
            bowSkill: 0,
            shotSkill: 0
        };

        if (0 === clubId) {
            // 궁도부
            result.bowSkill = expPerSkillLevel * 2;
            result.shotSkill = expPerSkillLevel / 2;
        } else if (1 === clubId) {
            // 사격부
            result.shotSkill = expPerSkillLevel * 2;
            result.bowSkill = expPerSkillLevel / 2;
        } else if (2 === clubId) {
            // 검도부
            result.cutSkill = expPerSkillLevel * 2;
            result.pokeSkill = expPerSkillLevel / 2;
            result.meleeSkill = expPerSkillLevel / 4;
        } else if (3 === clubId) {
            // 펜싱부
            result.pokeSkill = expPerSkillLevel * 2;
        } else if (4 === clubId || 5 === clubId) {
            // 태권도부 / 복싱부
            result.meleeSkill = expPerSkillLevel * 2;
        } else if (6 === clubId || 7 === clubId) {
            // 농구부 / 배구부
            result.throwSkill = expPerSkillLevel * 2;
            result.bombSkill = expPerSkillLevel / 4;
        } else if (8 === clubId) {
            // 야구부
            result.meleeSkill = expPerSkillLevel * 2;
            result.throwSkill = expPerSkillLevel / 2;
            result.bombSkill = expPerSkillLevel / 4;
        } else if (9 === clubId) {
            // 화학부
            result.bombSkill = expPerSkillLevel * 2;
        } else if (11 === clubId) {
            // 연극부
            var skillMap = [0, 0, 0, 0, 0, 0, 0, 0];
            skillMap[dice(8)] = expPerSkillLevel * 2;

            result.cutSkill = skillMap[0];
            result.throwSkill = skillMap[1];
            result.fistSkill = skillMap[2];
            result.meleeSkill = skillMap[3];
            result.bombSkill = skillMap[4];
            result.pokeSkill = skillMap[5];
            result.bowSkill = skillMap[6];
            result.shotSkill = skillMap[7];
        } else if (13 === clubId) {
            // 요리부
            result.cutSkill = expPerSkillLevel / 2;
        }

        return result;
    }


    /**
     * 보급 아이템 추가 설정
     *
     * @param supplyWeapon
     * @param personalItem
     * @returns {{item0: {idx: *, point: *, endurance: *}, item1: {idx: *, point: *, endurance: *}, item2: {idx: string, point: number, endurance: number}, item3: {idx: string, point: number, endurance: number}, item4: {}, item5: {}}}
     */
    function appendSupplyItem(supplyWeapon, personalItem) {
        var result = {
            item0: {idx: supplyWeapon.id, point: supplyWeapon.point, endurance: supplyWeapon.endurance},
            item1: {idx: personalItem.id, point: personalItem.point, endurance: personalItem.endurance},
            item2: {idx: 'stamina17', point: 20, endurance: 2},
            item3: {idx: 'heal1', point: 20, endurance: 2},
            item4: {idx: '', point: 0, endurance: 0},
            item5: {idx: '', point: 0, endurance: 0}
        };

        if ('weapon' === supplyWeapon.equip && '12gauge' === supplyWeapon.ammoType) {
            result.item4 = {idx: 'etc8', point: 24, endurance: 1};
        } else if ('weapon' === supplyWeapon.equip && '9mm' === supplyWeapon.ammoType) {
            result.item4 = {idx: 'etc9', point: 24, endurance: 1};
        } else if ('weapon' === supplyWeapon.equip && '22lr' === supplyWeapon.ammoType) {
            result.item4 = {idx: 'etc10', point: 24, endurance: 1};
        } else if ('weapon' === supplyWeapon.equip && '357mag' === supplyWeapon.ammoType) {
            result.item4 = {idx: 'etc12', point: 24, endurance: 1};
        } else if ('weapon' === supplyWeapon.equip && '38special' === supplyWeapon.ammoType) {
            result.item4 = {idx: 'etc13', point: 24, endurance: 1};
        } else if ('weapon' === supplyWeapon.equip && '45acp' === supplyWeapon.ammoType) {
            result.item4 = {idx: 'etc14', point: 24, endurance: 1};
        } else if ('weapon' === supplyWeapon.equip && 'apostle' === supplyWeapon.ammoType) {
            result.item4 = {idx: 'etc15', point: 24, endurance: 1};
        } else if ('weapon' === supplyWeapon.equip && 'bow' === supplyWeapon.ammoType) {
            result.item4 = {idx: 'etc16', point: 24, endurance: 1};
        }

        return result;
    }


    /**
     * 장소 관련된 정보 노출 최소화
     *
     * @param places
     * @returns {Array}
     */
    function arrangePlaceInfo(places) {
        var result = {};
        for (var i in places) {
            var place = places[i];
            result[place.idx] = {
                idx: place.idx,
                name: place.name,
                code: place.code,
                restrict: place.restrict,
                restrictReserve: place.restrictReserve
            };
        }

        return result;
    }

    return {
        dice: dice,
        getRandomItem: getRandomItem,
        getPoint: getPoint,
        getSkillByClubId: getSkillByClubId,
        appendSupplyItem: appendSupplyItem,
        arrangePlaceInfo: arrangePlaceInfo,
        getItemCollection: getItemCollection,
        setItemCollection: setItemCollection,
        getItem: getItem
    };
})();