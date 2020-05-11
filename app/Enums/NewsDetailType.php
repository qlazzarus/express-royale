<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class NewsDetailType extends Enum
{
    const Victim = 0;
    const Murder = 1;
    const Restrict = 2;
    const RestrictReserve = 3;
}
