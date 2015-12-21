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
     * 체력 상태 출력
     *
     * @param maxHealth
     * @param health
     * @returns {{name:String, color:String}}
     */
    function getHealthStatus(maxHealth, health) {
        var statusId = 0;
        var percent = 100;
        if (0 < maxHealth) {
            percent = health * 100 / maxHealth;
            if (percent > 60) {
                statusId = 0;
            } else if (percent > 30) {
                statusId = 1;
            } else if (percent > 10) {
                statusId = 2;
            } else if (percent > 0) {
                statusId = 3;
            } else if (percent <= 0) {
                statusId = 4;
            }
        } else {
            statusId = 4;
        }

        var status = gameConfig.status[statusId];
        if (typeof status === 'undefined') {
            status = {};
        }

        return status;
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
     * 응급처치 스테미너 소모
     *
     * @returns {number}
     */
    function getFirstAidStamina() {
        return gameConfig.firstAidStamina;
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
     * 아이템 합성
     *
     * @param itemFrom
     * @param itemTo
     */
    function getMixItem(itemFrom, itemTo) {
        var result = null;
        var mixItems = gameConfig.mixItems;
        for (var i in mixItems) {
            var entry = mixItems[i];
            if (-1 !== entry.material.indexOf(itemFrom) && -1 !== entry.material.indexOf(itemTo)) {
                result = entry.result;
                break;
            }
        }

        return result;
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
     * 공격 퍼센트 계산
     *
     * @param attack
     * @param weaponPoint
     * @param command
     * @returns {Number}
     */
    function getAttackPercent(attack, weaponPoint, command) {
        var result = (weaponPoint + attack) * attack;
        if ('meleeSkill' == command) {
            result = (parseInt(weaponPoint / 10) + attack) * attack;
        }

        return parseInt(result / 100);
    }


    /**
     * 방어 퍼센트 계산
     *
     * @param defence
     * @param headPoint
     * @param bodyPoint
     * @param armPoint
     * @param footPoint
     * @param accessoryPoint
     * @returns {Number}
     */
    function getDefencePercent(defence, headPoint, bodyPoint, armPoint, footPoint, accessoryPoint) {
        var result = (defence + headPoint + bodyPoint + armPoint + footPoint + accessoryPoint) * defence;

        return parseInt(result / 100);
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
     * 데미지 계산
     *
     * @param userAttack
     * @param userDamage
     * @param enemyDefence
     * @param skillName
     * @param armorBody
     * @param armorHead
     * @param armorAccessory
     * @returns {number}
     */
    function getTotalDamage(userAttack, userDamage, enemyDefence, skillName, armorBody, armorHead, armorAccessory) {
        var result = parseInt(userAttack * userDamage / 100) - enemyDefence;
        result /= 2;
        result += dice(result);

        var equipBuff = getEquipCounter(
            skillName,
            armorBody,
            armorHead,
            armorAccessory
        );

        result = parseInt(result * equipBuff / 100);
        if (result <= 0) {
            result = 1;
        }

        return result;
    }


    /**
     * 경험치 계산
     *
     * @param userLevel
     * @param enemyLevel
     * @returns {number}
     */
    function getBattleExp(userLevel, enemyLevel) {
        var levelDiff = enemyLevel - userLevel;
        if (0 > levelDiff) {
            levelDiff = 0;
        }

        return parseInt(levelDiff / 2) + 1;
    }


    /**
     * 레벨 상승 이벤트
     *
     * @param level
     * @param maxHealth
     * @param attack
     * @param defence
     * @param requireExp
     * @returns {{status: boolean, maxHealth: *, attack: *, defence: *, level: *, requireExp: number}}
     */
    function setLevelUp(level, maxHealth, attack, defence, requireExp) {
        var result = {
            status: false,
            maxHealth: maxHealth,
            attack: attack,
            defence: defence,
            level: level,
            requireExp: requireExp
        };

        if (0 >= requireExp) {
            result.status = true;
            result.maxHealth += dice(3) + 7;
            result.attack += dice(3) + 2;
            result.defence += dice(3) + 2;
            result.level++;
            result.requireExp = getExpPerLevel() + getExpIncrease() * result.level;
        }

        return result;
    }


    /**
     * 부상부위 결정
     *
     * @param injured
     * @param part
     * @returns {[]}
     */
    function setInjured(injured, part) {
        if ('' !== part && -1 === injured.indexOf(part)) {
            injured.push(part);
        }

        return injured;
    }


    /**
     * 아이템 소모 결정
     *
     * @param item
     * @param quantity
     * @returns {{}}
     */
    function setConsumeItem(item, quantity) {
        if (typeof quantity === 'undefined') {
            item.endurance--;
        } else {
            item.endurance -= quantity;
        }

        if (0 >= item.endurance) {
            item = {idx: '', endurance: 0, point: 0};
        }

        return item;
    }


    /**
     * 전투 계산
     *
     * @param user
     * @param skillType
     * @param enemy
     * @param strikeBack
     * @param eventLog
     * @returns {{damage: number, critical: boolean, injured: string, alert: boolean, weaponDestroy: boolean, eventLog: [], user: {}, enemy: {}}}
     */
    function getBattleResult(user, skillType, enemy, strikeBack, eventLog) {
        var res = {
            damage: 0,
            critical: false,
            injured: '',
            alert: false,
            weaponDestroy: false,
            eventLog: eventLog,
            user: user,
            enemy: enemy
        };

        var attackName = strikeBack ? '반격' : '공격';
        var weapon = getItem(user.weapon.idx);
        var destroyPercent = 0;
        var injurePercent = 0;
        var injurePart = [];
        var skillLevel = 0;

        if ('meleeSkill' === skillType) {
            res.eventLog.push([
                res.user.username, '의 ', attackName, '! ', weapon.name, '(으)로 ', res.enemy.username,
                '을(를) 때렸다!'
            ].join(''));
            res.user.meleeSkill++;
            skillLevel = res.user.meleeSkill;
            destroyPercent = 3;
            injurePercent = 5;
            injurePart = ['head', 'arm'];
        } else if ('bowSkill' === skillType) {
            res.eventLog.push([
                res.user.username, '의 ', attackName, '! ', weapon.name, '(으)로 ', res.enemy.username,
                '을(를) 겨냥해 쐈다!'
            ].join(''));
            res.user.bowSkill++;
            skillLevel = res.user.bowSkill;
            destroyPercent = 3;
            injurePercent = 10;
            injurePart = ['head', 'arm', 'body', 'foot'];
        } else if ('throwSkill' === skillType) {
            res.eventLog.push([
                res.user.username, '의 ', attackName, '! ', weapon.name, '(을)를 ', res.enemy.username,
                '에게 던졌다!'
            ].join(''));
            res.user.throwSkill++;
            skillLevel = res.user.throwSkill;
            destroyPercent = 0;
            injurePercent = 7;
            injurePart = ['head', 'foot'];
        } else if ('bombSkill' === skillType) {
            res.eventLog.push([
                res.user.username, '의 ', attackName, '! ', weapon.name, '(을)를 ', res.enemy.username,
                '에게 던졌다!'
            ].join(''));
            res.user.bombSkill++;
            skillLevel = res.user.bombSkill;
            destroyPercent = 0;
            injurePercent = 15;
            injurePart = ['head', 'arm', 'body', 'foot'];
            res.alert = true;
        } else if ('shotSkill' === skillType) {
            res.eventLog.push([
                res.user.username, '의 ', attackName, '! ', weapon.name, '(으)로 ', res.enemy.username,
                '을(를) 겨냥해 발포했다!'
            ].join(''));
            res.user.shotSkill++;
            skillLevel = res.user.shotSkill;
            destroyPercent = 3;
            injurePercent = 12;
            injurePart = ['head', 'arm', 'body', 'foot'];
            res.alert = true;
        } else if ('pokeSkill' === skillType) {
            res.eventLog.push([
                res.user.username, '의 ', attackName, '! ', weapon.name, '(으) ', res.enemy.username,
                '을(를) 찔렀다!'
            ].join(''));
            res.user.pokeSkill++;
            skillLevel = res.user.pokeSkill;
            destroyPercent = 3;
            injurePercent = 10;
            injurePart = ['head', 'arm', 'body', 'foot'];
        } else if ('cutSkill' === skillType) {
            res.eventLog.push([
                res.user.username, '의 ', attackName, '! ', weapon.name, '(으)로 ', res.enemy.username,
                '을(를) 베었다!'
            ].join(''));
            res.user.cutSkill++;
            skillLevel = res.user.cutSkill;
            destroyPercent = 3;
            injurePercent = 10;
            injurePart = ['head', 'arm', 'body', 'foot'];
        } else if ('fistSkill' === skillType) {
            res.eventLog.push([
                res.user.username, '의 ', attackName, '! ', weapon.name, '(으)로 ', res.enemy.username,
                '을(를) 때렸다!'
            ].join(''));
            res.user.fistSkill++;
            skillLevel = res.user.fistSkill;
            destroyPercent = 3;
            injurePercent = 10;
            injurePart = ['head'];

            if ('weaponDefault' === res.user.weapon.idx) {
                destroyPercent = 0;
                injurePercent = 3;
            }
        }

        skillLevel = parseInt(skillLevel / getExpPerSkillLevel());
        res.damage = getDamageBySkillLevel(skillLevel, res.user.weapon.idx);

        // 무기 손상
        if (dice(100) < destroyPercent) {
            res.weaponDestroy = true;
            res.user.weapon = {idx: 'weaponDefault', point: 0, endurance: 0};
        }

        // 부상처리 & 크리티컬
        var injureAttack = false;
        var injureDice = dice(100);
        var injurePartDice = dice(4);
        if (injureDice < injurePercent) {
            if (0 == injurePartDice && -1 !== injurePart.indexOf('head')) {
                res.injured = 'head';
                injureAttack = true;
            } else if (1 == injurePartDice && -1 !== injurePart.indexOf('arm')) {
                res.injured = 'arm';
                injureAttack = true;
            } else if (2 == injurePartDice && -1 !== injurePart.indexOf('body')) {
                res.injured = 'body';
                injureAttack = true;
            } else if (3 == injurePartDice && -1 !== injurePart.indexOf('foot')) {
                res.injured = 'foot';
                injureAttack = true;
            }
        }

        if (true === injureAttack && -1 !== ['', 'armorDefault'].indexOf(res.enemy.armor[res.injured].idx)) {
            res.injured = '';
            injureAttack = false;
            res.enemy.armor[res.injured].endurance--;
            if (0 >= res.enemy.armor[res.injured].endurance) {
                res.enemy.armor[res.injured] = {idx: '', point: 0, endurance: 0};
            }
        }

        if (true === injureAttack && dice(100) < {head: 30, arm: 80, body: 20, foot: 50}[res.injured]) {
            res.injured = '';
            res.damage += 10;
            res.critical = true;
        }

        return res;
    }


    function getEquipCounter(skillType, bodyId, headId, accessoryId) {
        var body = getItem(bodyId);
        var head = getItem(headId);
        var accessory = getItem(accessoryId);
        var result = 100;

        if ('shotSkill' == skillType && typeof accessory !== 'undefined') {
            result = 50;
        } else if ('shotSkill' == skillType && typeof head !== 'undefined') {
            result = 150;
        } else if ('cutSkill' == skillType && typeof body !== 'undefined' && 'chain' === body.material) {
            result = 50;
        } else if ('cutSkill' == skillType && typeof accessory !== 'undefined') {
            result = 150;
        } else if ('meleeSkill' == skillType && typeof head !== 'undefined') {
            result = 50;
        } else if ('meleeSkill' == skillType && typeof body !== 'undefined' && 'armor' === body.material) {
            result = 150;
        } else if ('pokeSkill' == skillType && typeof body !== 'undefined' && 'armor' === body.material) {
            result = 50;
        } else if ('pokSkill' == skillType && typeof body !== 'undefined' && 'chain' === body.material) {
            result = 150;
        }

        return result;
    }


    /**
     * 스킬레벨에 따른 데미지 계산
     *
     * @param skillLevel
     * @param weaponIdx
     * @returns {Number}
     */
    function getDamageBySkillLevel(skillLevel, weaponIdx) {
        var result = {
            0: 90,
            1: 95,
            2: 100,
            3: 105,
            4: 110,
            5: 115,
            6: 117,
            7: 119,
            8: 121,
            9: 123,
            10: 125,
            11: 127,
            12: 129,
            13: 131,
            14: 133,
            15: 135,
            16: 137,
            17: 139,
            18: 141,
            19: 143
        }[skillLevel];

        if (typeof result !== 'undefined') {
            result = 145;
        }

        if ('weaponDefault' === weaponIdx) {
            result = {
                0: 90,
                1: 95,
                2: 100,
                3: 105,
                4: 110,
                5: 115,
                6: 118,
                7: 121,
                8: 124,
                9: 127,
                10: 130,
                11: 133,
                12: 136,
                13: 139,
                14: 142,
                15: 145,
                16: 148,
                17: 151,
                18: 154,
                19: 157
            }[skillLevel];

            if (typeof result !== 'undefined') {
                result = 160;
            }
        }

        return result;
    }


    /**
     * 무기 소모율 계산
     *
     * @param weapon
     * @param skillType
     * @returns {{}}
     */
    function setConsumeWeapon(weapon, skillType) {
        var weaponInfo = getItem(weapon.idx);
        if (true == weaponInfo.ammoRequire && 0 < weapon.endurance) {
            weapon.endurance--;
        } else if ('throwSkill' === skillType && -1 !== weaponInfo.attackType.indexOf('throw')) {
            weapon.endurance--;
            if (0 >= weapon.endurance) {
                weapon = {idx:'weaponDefault', point:0, endurance:0};
            }
        } else if ('cutSkill' === skillType && -1 !== weaponInfo.attack.indexOf('cut')) {
            weapon.point -= dice(1) + 1;
            if (0 >= weapon.point) {
                weapon = {idx:'weaponDefault', point:0, endurance:0};
            }
        }

        return weapon;
    }


    /**
     * 방어구 소모율 계산
     *
     * @param armor
     * @returns {{}}
     */
    function setConsumeBodyArmor(armor) {
        if ('armorDefault' !== armor.idx && 0 == dice(5)) {
            armor.endurance--;
        }

        if (0 >= armor.endurance) {
            armor = {idx: 'armorDefault', point: 0, endurance: 0};
        }

        return armor;
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
     * @returns {{find: number, ambush: number, attack: number, defence: number, longRangeEngage: boolean, accuracyRate}}
     */
    function getBattleRateByAttacker(tactics, placeId, injured, weapon, shotSkill, cutSkill, throwSkill, fistSkill,
                                     bowSkill, meleeSkill, bombSkill, pokeSkill) {
        var result = {
            find: 5,    // 적, 아이템 발견율
            ambush: 7,  // 선제공격율
            attack: 100,   // 공격율
            defence: 100,  // 방어율
            longRangeEngage: false,
            accuracyRate: 0
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
     * @returns {{attack: number, defence: number, stealth: number, longRangeEngage: boolean, accuracyRate}}
     */
    function getBattleRateByDefender(status, tactics, placeId, injured, weapon, shotSkill, cutSkill, throwSkill, fistSkill,
                                     bowSkill, meleeSkill, bombSkill, pokeSkill) {
        var result = {
            attack: 100,   // 공격율
            defence: 100,  // 방어율
            stealth: 100,   // 발견당할 확율? (높을수록 발견되지 않음)
            longRangeEngage: false,
            accuracyRate: 0
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
        getAttackPercent: getAttackPercent,
        getDefencePercent: getDefencePercent,
        getHealthStatus: getHealthStatus,
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
        findItemSlot: findItemSlot,
        getBattleResult: getBattleResult,
        getEquipCounter: getEquipCounter,
        setConsumeWeapon: setConsumeWeapon,
        setConsumeBodyArmor: setConsumeBodyArmor,
        getTotalDamage: getTotalDamage,
        getBattleExp: getBattleExp,
        setLevelUp: setLevelUp,
        setInjured: setInjured,
        setConsumeItem: setConsumeItem,
        getFirstAidStamina: getFirstAidStamina,
        getMixItem: getMixItem
    };
})();