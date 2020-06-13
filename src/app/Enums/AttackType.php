<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class AttackType extends Enum
{
    const None = 0;
    const Shot = 1 << 0;
    const Cut = 1 << 1;
    const Throw = 1 << 2;
    const Fist = 1 << 3;
    const Bow = 1 << 4;
    const Melee = 1 << 5;
    const Bomb = 1 << 6;
    const Stab = 1 << 7;
}
