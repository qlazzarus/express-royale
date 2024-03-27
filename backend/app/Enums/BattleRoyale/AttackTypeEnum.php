<?php

namespace App\Enums\BattleRoyale;

enum AttackTypeEnum: int
{
    case None = 0;
    case Shot = 1 << 0;
    case Cut = 1 << 1;
    case Throw = 1 << 2;
    case Fist = 1 << 3;
    case Bow = 1 << 4;
    case Melee = 1 << 5;
    case Bomb = 1 << 6;
    case Stab = 1 << 7;
}
