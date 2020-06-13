<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class DeathType extends Enum
{
    const Weak = 0;
    const Poison = 1;
    const HackingFail = 2;
    const RestrictArea = 3;
    const Cut = 4;
    const Bow = 5;
    const Shot = 6;
    const Throw = 7;
    const Stab = 8;
    const Melee = 9;
    const Fist = 10;
}
