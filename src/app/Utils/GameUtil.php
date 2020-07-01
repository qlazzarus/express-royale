<?php

namespace App\Utils;

use App\Entities\AttackerReport;
use App\Entities\BattleReport;
use App\Entities\DefenderReport;
use App\Entities\ReconnReportInterface;
use App\Enums\ArmorMaterial;
use App\Enums\AttackType;
use App\Enums\EquipSlot;
use App\Enums\GameSetting;
use App\Enums\HealthStatus;
use App\Enums\Injure;
use App\Enums\LocationSpecialize;
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
     * @return BattleReport
     */
    public static function battle($me, $weapon, $target, $attackType, $skill, $armors, $isCounter)
    {
        $attackName = $isCounter ? '반격' : '공격';
        $destroyChance = 0;
        $injureChance = 0;
        $injureCandidate = [];

        $result = new BattleReport([
            'maxDamage' => 0,
            'injure' => Injure::None,
            'damageEquip' => EquipSlot::None,
            'skill' => $skill,
            'isCritical' => false,
            'isAlert' => false,
            'isWeaponDestroyed' => false
        ]);

        if (AttackType::Melee === $attackType) {
            $result->skill++;

            $destroyChance = 3;
            $injureChance = 5;
            $injureCandidate = [Injure::Head, Injure::Arm];
        } elseif (AttackType::Bow === $attackType) {
            $result->skill++;

            $destroyChance = 3;
            $injureChance = 10;
            $injureCandidate = [Injure::Head, Injure::Arm, Injure::Body, Injure::Leg];
        } elseif (AttackType::Throw === $attackType) {
            $result->skill++;

            $destroyChance = 0;
            $injureChance = 7;
            $injureCandidate = [Injure::Head, Injure::Leg];
        } elseif (AttackType::Bomb === $attackType) {
            $result->skill++;
            $result->isAlert = true;

            $destroyChance = 0;
            $injureChance = 15;
            $injureCandidate = [Injure::Head, Injure::Arm, Injure::Body, Injure::Leg];
        } elseif (AttackType::Shot === $attackType) {
            $result->skill++;
            $result->isAlert = true;

            $destroyChance = 3;
            $injureChance = 12;
            $injureCandidate = [Injure::Head, Injure::Arm, Injure::Body, Injure::Leg];
        } elseif (AttackType::Stab === $attackType) {
            $result->skill++;

            $destroyChance = 3;
            $injureChance = 10;
            $injureCandidate = [Injure::Head, Injure::Arm, Injure::Body, Injure::Leg];
        } elseif (AttackType::Cut === $attackType) {
            $result->skill++;

            $destroyChance = 3;
            $injureChance = 10;
            $injureCandidate = [Injure::Head, Injure::Arm, Injure::Body, Injure::Leg];
        } elseif (AttackType::Fist === $attackType) {
            $result->skill++;

            $destroyChance = 3;
            $injureChance = 10;
            $injureCandidate = [Injure::Head];

            if ('맨손' === $weapon) {
                $destroyChance = 0;
                $injureChance = 3;
            }
        }

        $result->maxDamage = self::maxDamage($skill, '맨손' === $weapon);
        $result->isWeaponDestroyed = self::dice(100) < $destroyChance;

        // not injured
        if ($self::dice(100) > $injureChance) return $result;

        // injured
        $injurePart = self::dice(3);
        if (0 === $injurePart && in_array(Injure::Head, $injureCandidate)) {
            $result->injure = Injure::Head;
        } elseif (1 === $injurePart && in_array(Injure::Arm, $injureCandidate)) {
            $result->injure = Injure::Arm;
        } elseif (2 === $injurePart && in_array(Injure::Body, $injureCandidate)) {
            $result->injure = Injure::Body;
        } elseif (3 === $injurePart && in_array(Injure::Leg, $injureCandidate)) {
            $result->injure = Injure::Leg;
        } else {
            return $result;
        }

        // injure -> armor stuck
        $stuck = false;
        foreach ($armors as $armor) {
            if (EquipSlot::ArmorHead === $armor->type && Injure::Head === $result->injure) {
                $stuck = true;
            } elseif (EquipSlot::ArmorBody === $armor->type && 0 < $armor->point && Injure::Body === $result->injure) {
                $stuck = true;
            } elseif (EquipSlot::ArmorArm === $armor->type && Injure::Arm === $result->injure) {
                $stuck = true;
            } elseif (EquipSlot::ArmorLeg === $armor->type && Injure::Leg === $result->injure) {
                $stuck = true;
            }

            if ($stuck) {
                $result->injure = Injure::None;
                $result->damageEquip = $armor->type;
                return $result;
            }
        }

        // critical
        $critical = self::dice(100);
        if ((Injure::Head === $result->injure && 30 > $critical) ||
            (Injure::Body === $result->injure && 20 > $critical) ||
            (Injure::Arm === $result->injure && 80 > $critical) ||
            (Injure::Leg === $result->injure && 50 > $critical)) {
            $result->injure = Injure::None;
            $result->isCritical = true;
            $result->maxDamage += 10;
        }

        return $result;
    }

    /**
     * @param StudentInfo $weapon
     * @param integer $melee
     * @param integer $bow
     * @param integer $throw
     * @param integer $bomb
     * @param integer $shot
     * @param integer $cut
     * @param integer $stab
     * @param integer $fist
     * @param integer $tactics
     * @param integer $specialize
     * @param integer $injure
     * @return AttackerReport
     */
    public static function reconn(StudentInfo $weapon, $melee, $bow, $throw, $bomb, $shot, $cut, $stab, $fist, $tactics, $specialize, $injure)
    {
        $result = new AttackerReport([
            'find' => 5,    // 적, 아이템 발견율
            'ambush' => 7,  // 선제공격율
            'attack' => 100,   // 공격율
            'defence' => 100,  // 방어율
            'accuracy' => 0,
            'isLongRange' => false,
        ]);

        $result = self::tacticsSpecialize($result, $tactics);
        if (Tactics::Defence == $tactics) {
            // 방어중시
            $result->ambush -= 4;
        } elseif (Tactics::Stealth == $tactics) {
            // 은밀행동
            $result->find -= 4;
            $result->ambush += 4;
        } elseif (Tactics::Investigate == $tactics) {
            // 탐색행동
            $result->find += 4;
            $result->ambush += 4;
        } elseif (Tactics::Streak == $tactics) {
            // 연속공격
            $result->find += 6;
        }

        $result = self::locationSpecialize($result, $specialize);
        if (in_array(Injure::Arm, IntegerUtil::factorize($injure))) $result->attack -= 20;

        $result = self::weaponSpecialize($result, $weapon, $melee, $bow, $throw, $bomb, $shot, $cut, $stab, $fist);
        if (in_array(Injure::Head, IntegerUtil::factorize($injure))) $result->accurancy -= 20;

        return $result;
    }

    /**
     * @param StudentInfo $weapon
     * @param integer $melee
     * @param integer $bow
     * @param integer $throw
     * @param integer $bomb
     * @param integer $shot
     * @param integer $cut
     * @param integer $stab
     * @param integer $fist
     * @param integer $tactics
     * @param integer $specialize
     * @param integer $injure
     * @param integer $status
     * @return DefenderReport
     */
    public static function defence(StudentInfo $weapon, $melee, $bow, $throw, $bomb, $shot, $cut, $stab, $fist, $tactics, $specialize, $injure, $status)
    {
        $result = new DefenderReport([
            'attack' => 100,   // 공격율
            'defence' => 100,  // 방어율
            'stealth' => 100,   // 발견당할 확율? (높을수록 발견되지 않음)
            'accuracy' => 0,
            'isLongRange' => false,
        ]);

        if (HealthStatus::Heal === $status) {
            // 치료중
            $result->stealth -= 30;
        }

        $result = self::tacticsSpecialize($result, $tactics);
        if (Tactics::Defence == $tactics) {
            // 방어중시
            $result->stealth -= 20;
        } elseif (Tactics::Stealth == $tactics) {
            // 은밀행동
            $result->stealth += 40;
        } elseif (Tactics::Investigate == $tactics) {
            // 탐색행동
            $result->stealth -= 40;
        } elseif (Tactics::Streak == $tactics) {
            // 연속공격
            $result->stealth -= 30;
        }

        $result = self::locationSpecialize($result, $specialize);
        if (in_array(Injure::Arm, IntegerUtil::factorize($injure))) $result->attack -= 20;

        $result = self::weaponSpecialize($result, $weapon, $melee, $bow, $throw, $bomb, $shot, $cut, $stab, $fist);
        if (in_array(Injure::Head, IntegerUtil::factorize($injure))) $result->accurancy -= 20;

        return $result;
    }

    /**
     * @param ReconnReportInterface $result
     * @param integer $tactics
     * @return ReconnReportInterface
     */
    public static function tacticsSpecialize(ReconnReportInterface $result, $tactics)
    {
        if (Tactics::Attack == $tactics) {
            // 공격중시
            $result->attack += 40;
            $result->defence -= 40;
        } elseif (Tactics::Defence == $tactics) {
            // 방어중시
            $result->attack -= 40;
            $result->defence += 40;
        } elseif (Tactics::Stealth == $tactics) {
            // 은밀행동
            $result->attack -= 40;
            $result->defence -= 40;
        } elseif (Tactics::Investigate == $tactics) {
            // 탐색행동
            $result->attack -= 40;
            $result->defence -= 40;
        } elseif (Tactics::Streak == $tactics) {
            // 연속공격
            $result->defence -= 40;
        }

        return $result;
    }

    /**
     * @param ReconnReportInterface $result
     * @param integer $specialize
     * @return ReconnReportInterface
     */
    public static function locationSpecialize(ReconnReportInterface $result, $specialize)
    {
        if (LocationSpecialize::AttackPlus === $specialize) {
            $result->attack += 10;
        } elseif (LocationSpecialize::AttackMinus === $specialize) {
            $result->attack -= 10;
        } elseif (LocationSpecialize::DefencePlus === $specialize) {
            $result->defence += 10;
        } elseif (LocationSpecialize::DefenceMinus === $specialize) {
            $result->defence -= 10;
        } elseif (LocationSpecialize::FindPlus === $specialize) {
            $result->find += 10;
        } elseif (LocationSpecialize::FindMinus === $specialize) {
            $result->find -= 10;
        }

        return $result;
    }

    /**
     * @param ReconnReportInterface $result
     * @param StudentInfo $weapon
     * @param integer $melee
     * @param integer $bow
     * @param integer $throw
     * @param integer $bomb
     * @param integer $shot
     * @param integer $cut
     * @param integer $stab
     * @param integer $fist
     * @return ReconnReportInterface
     */
    public static function weaponSpecialize(ReconnReportInterface $result, StudentInfo $weapon, $melee, $bow, $throw, $bomb, $shot, $cut, $stab, $fist)
    {
        if (in_array(AttackType::Melee, $weapon->item->attackType) ||
            ((in_array(AttackType::Bow, $weapon->item->attackType) || in_array(AttackType::Shot, $weapon->item->attackType)) && 0 >= $weapon->endurance)) {
            $result->accurancy = 80 + floor($melee / GameSetting::SkillExperience);
        } elseif (in_array(AttackType::Bow, $weapon->item->attackType)) {
            $result->isLongRange = true;
            $result->accurancy = 60 + floor($bow / GameSetting::SkillExperience * 2);
        } elseif (in_array(AttackType::Throw, $weapon->item->attackType)) {
            $result->isLongRange = true;
            $result->accurancy = 70 + floor($throw / GameSetting::SkillExperience * 1.5);
        } elseif (in_array(AttackType::Bomb, $weapon->item->attackType)) {
            $result->isLongRange = true;
            $result->accurancy = 60 + floor($bomb / GameSetting::SkillExperience * 2);
        } elseif (in_array(AttackType::Shot, $weapon->item->attackType)) {
            $result->isLongRange = true;
            $result->accurancy = 60 + floor($bomb / GameSetting::SkillExperience * 2);
        } elseif (in_array(AttackType::Cut, $weapon->item->attackType)) {
            $result->accurancy = 80 + floor($cut / GameSetting::SkillExperience);
        } elseif (in_array(AttackType::Stab, $weapon->item->attackType)) {
            $result->accurancy = 80 + floor($stab / GameSetting::SkillExperience);
        } else {
            $result->accurancy = 70 + floor($fist / GameSetting::SkillExperience * 1.5);
        }

        if (95 < $result->accurancy) $result->accurancy = 95;

        return $result;
    }

    /**
     * 무기 소모 endurance 계산
     *
     * @param StudentItem $weapon
     * @param integer $attack
     * @return WeaponFatigue
     */
    public static function weaponFatigue(StudentItem $weapon, $attack)
    {
        $result = new WeaponFatigue([
            'point' => $weapon->point,
            'endurance' => $weapon->endurance,
            'isWeaponDestroyed' => false
        ]);

        if ($weapon->item->ammo_require && 0 >= $result->endurance) {
            $attack = AttackType::Melee;
        }

        if (AttackType::Shot === $attack && in_array(AttackType::Shot, $weapon->item->attackType)) {
            $result->endurance--;
        } elseif (AttackType::Bow === $attack && in_array(AttackType::Bow, $weapon->item->attackType)) {
            $result->endurance--;
        } elseif (AttackType::Bomb === $attack && in_array(AttackType::Bomb, $weapon->item->attackType)) {
            $result->endurance--;
        } elseif (AttackType::Throw === $attack && in_array(AttackType::Throw, $weapon->item->attackType)) {
            $result->endurance--;
        } elseif (AttackType::Cut === $attack && in_array(AttackType::Cut, $weapon->item->attackType)) {
            $result->point -= self::dice(1) + 1;
        }

        if (0 > $result->endurance) {
            $result->endurance = 0;
            $result->isWeaponDestroyed = true;
        } elseif (0 > $result->point) {
            $result->point = 0;
            $result->isWeaponDestroyed = true;
        }

        return $result;
    }

    /**
     * 방어구 소모 endurance 계산
     *
     * @param StudentItem $armor
     * @return integer
     */
    public static function armorFatigue(StudentItem $armor)
    {
        $endurance = $armor->endurance;
        if (EquipSlot::ArmorBody !== $armor->type) return $endurance;

        if (0 < $armor->point && 0 === self::dice(5)) {
            $endurance--;
        }

        if (0 >= $endurance) return 0;
        return $endurance;
    }

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
