<?php

namespace App\Utils;

use App\Enums\GameSetting;

class GameUtil
{
    // TODO
    /**
     * @param integer $exp
     * @return integer
     */
    public static function experienceToLevel($exp)
    {
        /*
        // 레벨 경험치
        GameSetting::LevelExperience = 16;

        // 레벌 경험치 상승값
        GameSetting::LevelExperienceIncrease = 4;

        // util.getExpPerLevel() + util.getExpIncrease() init - lv2
        // 2 -> 16 + 4 = 20
        // 3 -> 16 + (4 * 2) = 24

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
        */
    }
}