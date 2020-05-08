<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class AttackType extends Enum
{
    const None = 0;
    const Shot = 1;
    const Cut = 2;
    const Throw = 4;
    const Fist = 8;
    const Bow = 16;
    const Melee = 32;
    const Bomb = 64;
    const Stab = 128;
}
