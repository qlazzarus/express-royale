<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class Injure extends Enum
{
    const None = 0;

    // 머리 부상
    const Head = 1;

    // 팔 부상
    const Arm = 2;

    // 복부 부상
    const Body = 4;

    // 다리 부상
    const Leg = 8;
}
