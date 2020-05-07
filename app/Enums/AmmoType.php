<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class AmmoType extends Enum
{
    const None = 0;
    const ShotGun12Gauge = 1;
    const Pistol9MM = 2;
    const Rifle22LR = 3;
    const Magnum357 = 4;
    const Revolver38Special = 5;
    const Pistol45ACP = 6;
    const MusketBall = 7;
    const Arrow = 8;
}