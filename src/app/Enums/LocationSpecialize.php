<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class LocationSpecialize extends Enum
{
    const None = 0;
    const FindMinus = 1;
    const FindPlus = 2;
    const DefenceMinus = 3;
    const DefencePlus = 4;
    const AttackMinus = 5;
    const AttackPlus = 6;
}
