/**
 * Created by monoless on 2015-12-08.
 */
module.exports = (function () {
    var gameConfig = {};


    /**
     * 설정값 추가
     *
     * @param config
     */
    function setGameConfig(config) {
        gameConfig = config;
    }


    /**
     * 기본 적 발견율
     *
     * @returns {number}
     */
    function getPersonSearch(tactics, level, killCount) {
        var personSearch = 60;
        var maxPersonSearch = 90;
        if (5 == tactics) {
            // 연속공격시 레벨/2+킬수/2만큼 적 발견율 상승
            personSearch += parseInt((level + killCount) / 2);
            if (maxPersonSearch < personSearch) {
                personSearch = maxPersonSearch;
            }
        }

        return personSearch;
    }


    /**
     * 스킬 설명
     *
     * @returns {{}}
     */
    function getSkills() {
        return gameConfig.skills;
    }


    /**
     * 전략 설명
     *
     * @returns {Array}
     */
    function getTactics() {
        return gameConfig.tactics;
    }


    /**
     * 전역 등장 아이템 추가
     *
     * @returns {Array}
     */
    function getGlobalLooted() {
        return gameConfig.globalLooted;
    }


    /**
     * 공격 기본수치
     *
     * @returns {number}
     */
    function getAttack() {
        return gameConfig.attack;
    }


    /**
     * 방어 기본수치
     *
     * @returns {number}
     */
    function getDefence() {
        return gameConfig.defence;
    }


    /**
     * 체력 기본수치
     *
     * @returns {number}
     */
    function getHealth() {
        return gameConfig.health;
    }


    /**
     * 공격 기본수치 증가치
     *
     * @returns {number}
     */
    function getAttackMaxIncrease() {
        return gameConfig.attackMaxIncrease;
    }


    /**
     * 방어 기본수치 증가치
     *
     * @returns {number}
     */
    function getDefenceMaxIncrease() {
        return gameConfig.defenceMaxIncrease;
    }


    /**
     * 체력 기본수치 증가치
     *
     * @returns {number}
     */
    function getHealthMaxIncrease() {
        return gameConfig.healthMaxIncrease;
    }


    /**
     * 스테미너 기본수치
     *
     * @returns {number}
     */
    function getMaxStamina() {
        return gameConfig.maxStamina;
    }


    /**
     * 레벨당 경험치
     *
     * @returns {number}
     */
    function getExpPerLevel() {
        return gameConfig.expPerLevel;
    }


    /**
     * 레벨당 경험치 증가치
     *
     * @returns {number}
     */
    function getExpIncrease() {
        return gameConfig.expIncrease;
    }


    /**
     * 동아리
     *
     * @returns {Array}
     */
    function getClubs() {
        return gameConfig.clubs;
    }


    /**
     * 학급명 리턴
     *
     * @returns {Array}
     */
    function getGroups() {
        return gameConfig.groups;
    }


    /**
     * 최대 학급 수 리턴
     *
     * @returns {number}
     */
    function getMaxGroups() {
        return gameConfig.maxGroups;
    }


    /**
     * 학급당 최대 남학생(여학생) 후
     *
     * @return {number}
     */
    function getGroupPerMan() {
        return gameConfig.groupPerMan;
    }


    /**
     * 가입기간
     *
     * @returns {number}
     */
    function getMaxRecruitTime() {
        return gameConfig.maxRecruitTime;
    }


    /**
     * 최대 가입자 수 제한
     *
     * @returns {number}
     */
    function getMaxRecruitMember() {
        return gameConfig.maxRecruitMember;
    }


    /**
     * 스킬 경험치 리턴
     *
     * @returns {number}
     */
    function getExpPerSkillLevel() {
        return gameConfig.expPerSkillLevel;
    }


    /**
     * 캐릭터 재생성 시간
     *
     * @returns {number}
     */
    function getRespawnTime() {
        return gameConfig.respawnTime;
    }


    /**
     * 지역 정보 리턴
     *
     * @returns {{}}
     */
    function getPlaces() {
        return gameConfig.places;
    }


    /**
     * 지역 대사 리턴
     *
     * @param placeId
     * @returns {string}
     */
    function getPlaceMessage(placeId) {
        return gameConfig.places[placeId].message;
    }


    /**
     * 지역 스텟
     *
     * @param placeId
     * @returns {string}
     */
    function getPlaceSpecialize(placeId) {
        return gameConfig.places[placeId].specialize;
    }


    /**
     * 아이콘 정보 리턴
     *
     * @returns {Array}
     */
    function getIcons() {
        return gameConfig.icons;
    }


    /**
     * 아이템 리턴
     *
     * @param itemId
     * @returns {{}}
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
            return gameConfig.items[itemId];
        }
    }


    /**
     * 빈슬롯 찾기
     *
     * @param item0
     * @param item1
     * @param item2
     * @param item3
     * @param item4
     * @param item5
     * @returns {null|string}
     */
    function getEmptyItemSlot(item0, item1, item2, item3, item4, item5) {
        var inventories = ['item0', 'item1', 'item2', 'item3', 'item4', 'item5'];
        var slots = {
            item0: item0,
            item1: item1,
            item2: item2,
            item3: item3,
            item4: item4,
            item5: item5
        };

        var returnSlot = null;
        for (var i in inventories) {
            var current = slots[inventories[i]];
            if ('' === current.idx) {
                returnSlot = inventories[i];
                break;
            }
        }

        return returnSlot;
    }


    /**
     * 아이템ID로 슬롯 찾기
     *
     * @param itemId
     * @param item0
     * @param item1
     * @param item2
     * @param item3
     * @param item4
     * @param item5
     * @returns {null|string}
     */
    function findItemSlot(itemId, item0, item1, item2, item3, item4, item5) {
        var inventories = ['item0', 'item1', 'item2', 'item3', 'item4', 'item5'];
        var slots = {
            item0: item0,
            item1: item1,
            item2: item2,
            item3: item3,
            item4: item4,
            item5: item5
        };

        var returnSlot = null;
        for (var i in inventories) {
            var current = slots[inventories[i]];
            if (itemId === current.idx) {
                returnSlot = inventories[i];
                break;
            }
        }

        return returnSlot;
    }


    /**
     * 주사위 (랜덤)
     *
     * @param maxValue
     * @returns {number}
     */
    function dice(maxValue) {
        return Math.floor(Math.random() * (maxValue + 1));
    }


    /**
     * 아이템 랜덤으로 뽑아오기
     *
     * @param itemList
     * @returns {{}}
     */
    function getRandomItem(itemList) {
        var itemId = itemList[dice(itemList.length - 1)];

        return getItem(itemId);
    }


    /**
     * 보급 아이템
     *
     * @returns {Array}
     */
    function getSupplyItems() {
        return gameConfig.supplyItems;
    }


    /**
     * 개인 아이템
     *
     * @returns {Array}
     */
    function getPersonalItems() {
        return gameConfig.personalItems;
    }


    /**
     * 포인트 랜덤으로 더하기
     *
     * @param basic
     * @param random
     * @returns {number}
     */
    function getPoint(basic, random) {
        return dice(random) + basic;
    }


    /**
     * 이동 스테미너 계산
     *
     * @param clubId
     * @param injured
     * @returns {number}
     */
    function moveConsumeStamina(clubId, injured) {
        var result = 0;
        if (-1 !== injured.indexOf('foot')) {
            result = dice(5) + 13;
        } else if (10 == clubId) {
            result = dice(5) + 5;
        } else {
            result = dice(5) + 8;
        }

        return result;
    }


    /**
     * 탐색 스테미너 계산
     *
     * @param clubId
     * @param injured
     * @returns {number}
     */
    function exploreConsumeStamina(clubId, injured) {
        var result = 0;
        if (-1 !== injured.indexOf('foot')) {
            result = dice(5) + 23;
        } else if (10 == clubId) {
            result = dice(5) + 13;
        } else {
            result = dice(5) + 18;
        }

        return result;
    }


    /**
     * 동아리에 따른 능력치 결정
     *
     * @param clubId
     * @returns {{cutSkill: number, throwSkill: number, fistSkill: number, meleeSkill: number, bombSkill: number, pokeSkill: number, bowSkill: number, shotSkill: number}}
     */
    function getSkillByClubId(clubId) {
        var expPerSkillLevel = getExpPerSkillLevel();
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
     * @returns {Array}
     */
    function arrangePlaceInfo() {
        var result = [];
        var places = getPlaces();
        var placeArrange = gameConfig.placeArrange;
        for (var i in placeArrange) {
            var idx = placeArrange[i];
            var place = places[idx];
            result.push({
                idx: idx,
                name: place.name,
                code: place.code,
                restrict: place.restrict,
                restrictReserve: place.restrictReserve
            });
        }

        return result;
    }


    /**
     * 공격자 공방수치 계산
     *
     * @param tactics
     * @param placeId
     * @param injured
     * @param weapon
     * @param shotSkill
     * @param cutSkill
     * @param throwSkill
     * @param fistSkill
     * @param bowSkill
     * @param meleeSkill
     * @param bombSkill
     * @param pokeSkill
     * @returns {{find: number, ambush: number, attack: number, defence: number}}
     */
    function getBattleRateByAttacker(tactics, placeId, injured, weapon, shotSkill, cutSkill, throwSkill, fistSkill,
                                     bowSkill, meleeSkill, bombSkill, pokeSkill) {
        var result = {
            find: 5,    // 적, 아이템 발견율
            ambush: 7,  // 선제공격율
            attack: 100,   // 공격율
            defence: 100   // 방어율
        };

        if (1 == tactics) {
            // 공격중시
            result.attack += 40;
            result.defence -= 40;
        } else if (2 == tactics) {
            // 방어중시
            result.attack -= 40;
            result.defence += 40;
            result.ambush -= 4;
        } else if (3 == tactics) {
            // 은밀행동
            result.attack -= 40;
            result.defence -= 40;
            result.find -= 4;
            result.ambush += 4;
        } else if (4 == tactics) {
            // 탐색행동
            result.attack -= 40;
            result.defence -= 40;
            result.find += 4;
            result.ambush += 4;
        } else if (5 == tactics) {
            // 연속공격
            result.defence -= 40;
            result.find += 6;
        }

        var merged = getBattleRateByPlace(placeId, result.attack, result.defence, result.find);
        result.attack = merged.attack;
        result.defence = merged.defence;
        result.find = merged.find;

        if (-1 !== injured.indexOf('arm')) {
            result.attack -= 20;
        }

        var weaponStatus = getBattleRateByWeapon(weapon, injured, shotSkill, cutSkill, throwSkill, fistSkill, bowSkill,
            meleeSkill, bombSkill, pokeSkill);

        result.longRangeEngage = weaponStatus.longRangeEngage;
        result.accuracyRate = weaponStatus.accuracyRate;

        return result;
    }


    /**
     * 방어자 공방수치 계산
     *
     * @param status
     * @param tactics
     * @param placeId
     * @param injured
     * @param weapon
     * @param shotSkill
     * @param cutSkill
     * @param throwSkill
     * @param fistSkill
     * @param bowSkill
     * @param meleeSkill
     * @param bombSkill
     * @param pokeSkill
     * @returns {{attack: number, defence: number, stealth: number}}
     */
    function getBattleRateByDefender(status, tactics, placeId, injured, weapon, shotSkill, cutSkill, throwSkill, fistSkill,
                                     bowSkill, meleeSkill, bombSkill, pokeSkill) {
        var result = {
            attack: 100,   // 공격율
            defence: 100,  // 방어율
            stealth: 100    // 발견당할 확율? (높을수록 발견되지 않음)
        };

        if (5 == status) {
            // 치료중
            result.stealth -= 30;
        }

        if (1 == tactics) {
            // 공격중시
            result.attack += 40;
            result.defence -= 40;
        } else if (2 == tactics) {
            // 방어중시
            result.attack -= 40;
            result.defence += 40;
            result.stealth -= 20;
        } else if (3 == tactics) {
            // 은밀행동
            result.attack -= 40;
            result.defence -= 40;
            result.stealth += 40;
        } else if (4 == tactics) {
            // 탐색행동
            result.attack -= 40;
            result.defence -= 40;
            result.stealth -= 40;
        } else if (5 == tactics) {
            // 연속공격
            result.defence -= 40;
            result.stealth -= 30;
        }

        var merged = getBattleRateByPlace(placeId, result.attack, result.defence, 0);
        result.attack = merged.attack;
        result.defence = merged.defence;

        if (-1 !== injured.indexOf('arm')) {
            result.attack -= 20;
        }

        var weaponStatus = getBattleRateByWeapon(weapon, injured, shotSkill, cutSkill, throwSkill, fistSkill, bowSkill,
            meleeSkill, bombSkill, pokeSkill);

        result.longRangeEngage = weaponStatus.longRangeEngage;
        result.accuracyRate = weaponStatus.accuracyRate;

        return result;
    }


    /**
     * 지역에 따른 공방수치 계산
     *
     * @param placeId
     * @param attack
     * @param defence
     * @param find
     * @returns {{attack: *, defence: *, find: *}}
     */
    function getBattleRateByPlace(placeId, attack, defence, find) {
        var specialize = getPlaceSpecialize('place' + placeId);
        var result = {
            attack: attack,
            defence: defence,
            find: find
        };

        if ('attack_plus' === specialize) {
            result.attack += 10;
        } else if ('attack_minus' === specialize) {
            result.attack -= 10;
        } else if ('defence_plus' === specialize) {
            result.defence += 10;
        } else if ('defence_minus' === specialize) {
            result.defence -= 10;
        } else if ('find_plus' === specialize) {
            result.find += 1;
        } else if ('find_minus' === specialize) {
            result.find -= 1;
        }

        return result;
    }


    /**
     * 무기+스킬에 따른 명중률 계산
     *
     * @param weapon
     * @param injured
     * @param shotSkill
     * @param cutSkill
     * @param throwSkill
     * @param fistSkill
     * @param bowSkill
     * @param meleeSkill
     * @param bombSkill
     * @param pokeSkill
     * @returns {{longRangeEngage: boolean, accuracyRate: number}}
     */
    function getBattleRateByWeapon(weapon, injured, shotSkill, cutSkill, throwSkill, fistSkill, bowSkill, meleeSkill,
                                   bombSkill, pokeSkill) {

        var result = {
            longRangeEngage: false,
            accuracyRate: 0
        };

        var weaponStatus = getItem(weapon.idx);
        var skillRate = getExpPerSkillLevel();
        if (-1 !== weaponStatus.attackType.indexOf('melee')
            || ((-1 !== weaponStatus.attackType.indexOf('bow') || -1 !== weaponStatus.attackType.indexOf('shot'))
            && 0 == weapon.endurance)) {
            result.accuracyRate = 80 + parseInt(meleeSkill / skillRate);
        } else if (-1 !== weaponStatus.attackType.indexOf('bow')) {
            result.longRangeEngage = true;
            result.accuracyRate = 60 + parseInt(bowSkill / skillRate * 2);
        } else if (-1 !== weaponStatus.attackType.indexOf('throw')) {
            result.longRangeEngage = true;
            result.accuracyRate = 70 + parseInt(throwSkill / skillRate * 1.5);
        } else if (-1 !== weaponStatus.attackType.indexOf('bomb')) {
            result.longRangeEngage = true;
            result.accuracyRate = 60 + parseInt(bombSkill / skillRate * 2);
        } else if (-1 !== weaponStatus.attackType.indexOf('shot')) {
            result.longRangeEngage = true;
            result.accuracyRate = 60 + parseInt(shotSkill / skillRate * 2);
        } else if (-1 !== weaponStatus.attackType.indexOf('cut')) {
            result.accuracyRate = 80 + parseInt(cutSkill / skillRate);
        } else if (-1 !== weaponStatus.attackType.indexOf('poke')) {
            result.accuracyRate = 80 + parseInt(pokeSkill / skillRate);
        } else {
            result.accuracyRate = 70 + parseInt(fistSkill / skillRate * 1.5);
        }

        if (result.accuracyRate > 95) {
            result.accuracyRate = 95;
        }

        if (-1 !== injured.indexOf('head')) {
            result.accuracyRate -= 20;
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
        setGameConfig: setGameConfig,
        getExpPerSkillLevel: getExpPerSkillLevel,
        getRespawnTime: getRespawnTime,
        getGroups: getGroups,
        getMaxGroups: getMaxGroups,
        getMaxRecruitMember: getMaxRecruitMember,
        getMaxRecruitTime: getMaxRecruitTime,
        getGroupPerMan: getGroupPerMan,
        getPlaces: getPlaces,
        getItem: getItem,
        getSupplyItems: getSupplyItems,
        getPersonalItems: getPersonalItems,
        getIcons: getIcons,
        getClubs: getClubs,
        getAttack: getAttack,
        getDefence: getDefence,
        getHealth: getHealth,
        getAttackMaxIncrease: getAttackMaxIncrease,
        getDefenceMaxIncrease: getDefenceMaxIncrease,
        getHealthMaxIncrease: getHealthMaxIncrease,
        getMaxStamina: getMaxStamina,
        getExpPerLevel: getExpPerLevel,
        getExpIncrease: getExpIncrease,
        getSkills: getSkills,
        getTactics: getTactics,
        getPlaceMessage: getPlaceMessage,
        moveConsumeStamina: moveConsumeStamina,
        exploreConsumeStamina: exploreConsumeStamina,
        getBattleRateByAttacker: getBattleRateByAttacker,
        getBattleRateByDefender: getBattleRateByDefender,
        getPersonSearch: getPersonSearch,
        getGlobalLooted: getGlobalLooted,
        getEmptyItemSlot: getEmptyItemSlot,
        findItemSlot: findItemSlot
    };
})();