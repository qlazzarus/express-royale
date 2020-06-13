<?php

namespace App\Entities;

use \Spatie\DataTransferObject\DataTransferObject;

class BattleReport extends DataTransferObject
{
    public int $maxDamage;

    public int $skill;

    public int $injure;

    public int $damageEquip;

    public array $logs;

    public bool $isCritical;

    public bool $isAlert;

    public bool $isWeaponDestroyed;
}