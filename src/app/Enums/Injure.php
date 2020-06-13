<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class Injure extends Enum
{
    const None = 0;

    // 머리 부상
    const Head = 1 << 0;

    // 팔 부상
    const Arm = 1 << 1;

    // 복부 부상
    const Body = 1 << 2;

    // 다리 부상
    const Leg = 1 << 3;
}
