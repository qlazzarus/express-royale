<?php

namespace App\Utils;

use App\Entities\BattleLog;
use App\Enums\ArmorMaterial;
use App\Enums\AttackType;
use App\Enums\EquipSlot;
use App\Enums\GameSetting;
use App\Enums\HealthStatus;
use App\Enums\Injure;
use App\Enums\Tactics;
use App\StudentItem;

class GameUtil
{
    /**
     * 누적 경험치 -> 레벨
     *
     * @param integer $exp
     * @return integer
     */
    public static function experienceToLevel($exp)
    {
        $level = 0;
        $remain = $exp;

        do {
            $remain -= GameSetting::LevelExperience + (GameSetting::LevelExperienceIncrease * ($level + 1));
            $level++;
        } while (0 < $remain);

        return $level;
    }

    /**
     * 레벨 -> 누적 경험치
     *
     * @param integer $level
     * @return integer
     */
    public static function levelToExperience($level)
    {
        $exp = 0;

        for ($i = 0; $i < $level; $i++) {
            $exp += GameSetting::LevelExperience + (GameSetting::LevelExperienceIncrease * ($i + 1));
        }

        return $exp;
    }

    /**
     * 건강 상태 표시
     *
     * @param integer $health
     * @param integer $maxHealth
     * @return integer
     */
    public static function healthStatus($health, $maxHealth)
    {
        if (!$maxHealth) return HealthStatus::Normal;

        $percent = $health * 100 / $maxHealth;
        if (60 < $percent) {
            return HealthStatus::Normal;
        } elseif (30 < $percent) {
            return HealthStatus::MinorWound;
        } elseif (10 < $percent) {
            return HealthStatus::MajorWound;
        } elseif (0 < $percent) {
            return HealthStatus::CriticalWound;
        }

        return HealthStatus::Death;
    }

    /**
     * 기본 적 발견율
     *
     * @param integer $tactics
     * @param integer $level
     * @param integer $killCount
     * @return integer
     */
    public static function detectionRate($tactics, $level, $killCount)
    {
        $result = 60;
        $max = 90;

        if (Tactics::Streak !== $tactics) return $result;

        $result += floor(($level + $killCount) / 2);
        if ($max < $result) return $max;
        return $result;
    }

    /**
     * 공격력 계산
     *
     * @param integer $attackPoint
     * @param integer $weaponPoint
     * @param integer $attackType
     * @return integer
     */
    public static function attackPoint($attackPoint, $weaponPoint, $attackType)
    {
        if (AttackType::Melee === $attackType) {
            $weaponPoint = floor($weaponPoint / 10);
        }

        $result = ($weaponPoint + $attackPoint) * $attackPoint;
        return floor($result / 100);
    }

    /**
     * 방어력 계산
     *
     * @param integer $defencePoint
     * @param integer $headPoint
     * @param integer $bodyPoint
     * @param integer $armPoint
     * @param integer $legPoint
     * @param integer $accessoryPoint
     * @return integer
     */
    public static function defencePoint($defencePoint, $headPoint, $bodyPoint, $armPoint, $legPoint, $accessoryPoint)
    {
        $result = ($defencePoint + $headPoint + $bodyPoint + $armPoint + $legPoint + $accessoryPoint) * $defencePoint;
        return floor($result / 100);
    }

    /**
     * 데미지 계산
     *
     * @param integer $attack
     * @param integer $maxDamage
     * @param integer $defence
     * @param integer $damageBuff
     * @return integer
     */
    public static function damage($attack, $maxDamage, $defence, $damageBuff)
    {
        $result = floor($attack * $maxDamage / 100) - $defence;
        $result /= 2;
        $result += self::dice($result);

        $result = floor($result * $damageBuff / 100);

        if (0 >= $result) return 1;
        return $result;
    }

    /**
     * 데미지 계산시 방어구 가산치
     *
     * @param integer $attackType
     * @param boolean $hasArmorHead
     * @param boolean $hasArmorBody
     * @param boolean $hasArmorAccessory
     * @param integer $material
     * @return integer
     */
    public static function damageBuff($attackType, $hasArmorHead, $hasArmorBody, $hasArmorAccessory, $material)
    {
        if (AttackType::Shot === $attackType && $hasArmorAccessory) {
            return 50;
        } elseif (AttackType::Shot === $attackType && $hasArmorHead) {
            return 150;
        } elseif (AttackType::Cut === $attackType && $hasArmorBody && ArmorMaterial::Chain === $material) {
            return 50;
        } elseif (AttackType::Cut === $attackType && $hasArmorAccessory) {
            return 150;
        } elseif (AttackType::Melee === $attackType && $hasArmorHead) {
            return 50;
        } elseif (AttackType::Melee === $attackType && $hasArmorBody && ArmorMaterial::Armor === $material) {
            return 150;
        } elseif (AttackType::Stab === $attackType && $hasArmorBody && ArmorMaterial::Armor === $material) {
            return 50;
        } elseif (AttackType::Stab === $attackType && $hasArmorBody && ArmorMaterial::Chain === $material) {
            return 150;
        }

        return 100;
    }

    /**
     * 스킬 레벨에 따른 최대 데미지
     *
     * @param integer $skill
     * @param boolean $isPunch
     * @return integer
     */
    public static function maxDamage($skill, $isPunch)
    {
        $level = floor($skill / GameSetting::SkillExperience);
        $tables = [90, 95, 100, 100, 105, 110, 115, 117, 119, 121, 123, 125, 127, 139, 131, 133, 135, 137, 139, 141, 143, 145];
        if ($isPunch) {
            $tables = [90, 95, 100, 100, 105, 110, 115, 118, 121, 124, 127, 130, 133, 136, 139, 142, 145, 148, 151, 154, 157, 160];
        }

        return array_key_exists($level + 1, $tables) ? $tables[$level + 1] : $tables[21];
    }

    /**
     * 전투 계산
     *
     * @param string $me
     * @param string $weapon
     * @param string $target
     * @param integer $attackType
     * @param integer $skill
     * @param StudentItem[] $armors
     * @param boolean $isCounter
     * @return BattleLog
     */
    public static function battle($me, $weapon, $target, $attackType, $skill, $armors, $isCounter)
    {
        $attackName = $isCounter ? '반격' : '공격';
        $destroyChance = 0;
        $injureChance = 0;
        $injureCandidate = [];

        $injure = Injure::None;
        $damageEquip = EquipSlot::None;
        $logs = [];
        $isCritical = false;
        $isAlert = false;

        if (AttackType::Melee === $attackType) {
            $logs[] = "{$me}의 {$attackName}! {$weapon}(으)로 {$target}을(를) 때렸다!'";
            $skill++;
            $destroyChance = 3;
            $injureChance = 5;
            $injureCandidate = [Injure::Head, Injure::Arm];
        } elseif (AttackType::Bow === $attackType) {
            $logs[] = "{$me}의 {$attackName}! {$weapon}(으)로 {$target}을(를) 겨냥해 쐈다!'";
            $skill++;
            $destroyChance = 3;
            $injureChance = 10;
            $injureCandidate = [Injure::Head, Injure::Arm, Injure::Body, Injure::Leg];
        } elseif (AttackType::Throw === $attackType) {
            $logs[] = "{$me}의 {$attackName}! {$weapon}(을)를 {$target}에게 던졌다!'";
            $skill++;
            $destroyChance = 0;
            $injureChance = 7;
            $injureCandidate = [Injure::Head, Injure::Leg];
        } elseif (AttackType::Bomb === $attackType) {
            $logs[] = "{$me}의 {$attackName}! {$weapon}(을)를 {$target}에게 던졌다!'";
            $skill++;
            $destroyChance = 0;
            $injureChance = 15;
            $injureCandidate = [Injure::Head, Injure::Arm, Injure::Body, Injure::Leg];
            $isAlert = true;
        } elseif (AttackType::Shot === $attackType) {
            $logs[] = "{$me}의 {$attackName}! {$weapon}(으)로 {$target}을(를) 겨냥해 발포했다!'";
            $skill++;
            $destroyChance = 3;
            $injureChance = 12;
            $injureCandidate = [Injure::Head, Injure::Arm, Injure::Body, Injure::Leg];
            $isAlert = true;
        } elseif (AttackType::Stab === $attackType) {
            $logs[] = "{$me}의 {$attackName}! {$weapon}(으)로 {$target}을(를) 찔렀다!'";
            $skill++;
            $destroyChance = 3;
            $injureChance = 10;
            $injureCandidate = [Injure::Head, Injure::Arm, Injure::Body, Injure::Leg];
        } elseif (AttackType::Cut === $attackType) {
            $logs[] = "{$me}의 {$attackName}! {$weapon}(으)로 {$target}을(를) 베었다!'";
            $skill++;
            $destroyChance = 3;
            $injureChance = 10;
            $injureCandidate = [Injure::Head, Injure::Arm, Injure::Body, Injure::Leg];
        } elseif (AttackType::Fist === $attackType) {
            $logs[] = "{$me}의 {$attackName}! {$weapon}(으)로 {$target}을(를) 때렸다!'";
            $skill++;
            $destroyChance = 3;
            $injureChance = 10;
            $injureCandidate = [Injure::Head];

            if ('맨손' === $weapon) {
                $destroyChance = 0;
                $injureChance = 3;
            }
        }

        $maxDamage = self::maxDamage($skill, '맨손' === $weapon);

        // weapon destroyed
        $isWeaponDestroyed = self::dice(100) < $destroyChance;

        // injured
        $isInjured = self::dice(100) < $injureChance;
        if ($isInjured) {
            $injure = $injureCandidate[self::dice(count($injureCandidate) - 1)];
            foreach ($armors as $armor) {
                $stuck = false;

                if (EquipSlot::ArmorHead === $armor->type && Injure::Head === $injure) {
                    $stuck = true;
                } elseif (EquipSlot::ArmorBody === $armor->type && 0 < $armor->point && Injure::Body === $injure) {
                    $stuck = true;
                } elseif (EquipSlot::ArmorArm === $armor->type && Injure::Arm === $injure) {
                    $stuck = true;
                } elseif (EquipSlot::ArmorLeg === $armor->type && Injure::Leg === $injure) {
                    $stuck = true;
                }

                if ($stuck) {
                    $isInjured = false;
                    $injure = Injure::None;
                }
            }
        }

        if ($isInjured) {
            // TODO 방어구 endurance 차감?? 기존 cgi 코드 분석필요
        }

        return new BattleLog([
            'maxDamage' => $maxDamage,
            'injure' => $injure,
            'damageEquip' => $damageEquip,
            'skill' => $skill,
            'logs' => $logs,
            'isCritical' => $isCritical,
            'isAlert' => $isAlert,
            'isWeaponDestroyed' => $isWeaponDestroyed
        ]);
    }
    /*
    function getBattleResult(user, skillType, enemy, strikeBack, eventLog) {
        var res = {
            damage: 0, //integer
            critical: false, //isCritical boolean
            injured: '', //injure integer[]
            alert: false, //isAlert boolean
            weaponDestroy: false, //isWeaponDestroy boolean
            eventLog: eventLog, //logs string[]
            user: user,
            enemy: enemy
        };

        var attackName = strikeBack ? '반격' : '공격';
        var weapon = getItem(user.weapon.idx);
        var destroyPercent = 0;
        var injurePercent = 0;
        var injurePart = [];
        var skillLevel = 0;



        if (true === injureAttack) {
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
    */

    /**
     * 스테미너 회복량 계산
     *
     * @param integer $second
     * @return integer
     */
    public static function recoverStamina($second)
    {
        return floor(($second / GameSetting::StaminaRecoverInterval) * GameSetting::StaminaRecoverIncrease);
    }

    /**
     * 체력 회복량 계산
     *
     * @param integer $second
     * @return integer
     */
    public static function recoverHealth($second)
    {
        return floor(($second / GameSetting::HealthRecoverInterval) * GameSetting::HealthRecoverIncrease);
    }

    /**
     * 주사위
     *
     * @param integer $max
     * @return integer
     */
    public static function dice($max)
    {
        return mt_rand(0, $max);
    }


    /**
     * 이동 피로도 계산
     *
     * @param boolean $isReduceStamina
     * @param integer $injure
     * @return integer
     */
    public static function journeyFatigue($isReduceStamina, $injure)
    {
        $injured = IntegerUtil::factorize($injure);
        if (in_array(Injure::Leg, $injured)) {
            return self::dice(5) + 8;
        } elseif ($isReduceStamina) {
            return self::dice(5);
        } else {
            return self::dice(5) + 3;
        }
    }

    /**
     * 탐사 피로도 계산
     *
     * @param boolean $isReduceStamina
     * @param integer $injure
     * @return integer
     */
    public static function exploreFatigue($isReduceStamina, $injure)
    {
        $injured = IntegerUtil::factorize($injure);
        if (in_array(Injure::Leg, $injured)) {
            return self::dice(5) + 18;
        } elseif ($isReduceStamina) {
            return self::dice(5) + 8;
        } else {
            return self::dice(5) + 13;
        }
    }
}
