<?php

namespace App\Entities;

use \Spatie\DataTransferObject\DataTransferObject;

class WeaponFatigue extends DataTransferObject
{
    public int $point;

    public int $endurance;

    public bool $isWeaponDestroyed;
}