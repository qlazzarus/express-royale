<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class WeaponFatigue extends Data
{
    public function __construct(
        public int $point,
        public int $endurance,
        public bool $isWeaponDestroyed
    ) {

    }

}
