<?php

namespace App\Enums\BattleRoyale;

enum InjureEnum: int
{
    case None = 0;

    // 머리 부상
    case Head = 1 << 0;

    // 팔 부상
    case Arm = 1 << 1;

    // 복부 부상
    case Body = 1 << 2;

    // 다리 부상
    case Leg = 1 << 3;
}
