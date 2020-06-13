<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class Tactics extends Enum
{
    // 보통
    const Normal = 0;

    // 공격중시
    const Attack = 1;

    // 방어중시
    const Defence = 2;

    // 탐색행동
    const Investigate = 3;

    // 은밀행동
    const Stealth = 4;

    // 연속공격
    const Streak = 5;
}
