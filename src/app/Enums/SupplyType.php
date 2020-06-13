<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class SupplyType extends Enum
{
    // 개인 아이템
    const Personal = 0;

    // 보급
    const Goverment = 1;
}
