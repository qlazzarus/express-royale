<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Normal()
 * @method static static Attack()
 * @method static static Defence()
 * @method static static Stealth()
 * @method static static Streak()
 */
final class Tactics extends Enum
{
    // 보통
    const Normal = 0;

    // 공격중시
    const Attack = 1;

    // 방어중시
    const Defence = 2;

    // 탐색행동
    const Stealth = 3;

    // 연속공격
    const Streak = 4;
}
