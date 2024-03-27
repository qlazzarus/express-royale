<?php

namespace App\Data;

use App\Enums\BattleRoyale\EquipSlotEnum;
use App\Enums\BattleRoyale\InjureEnum;
use Spatie\LaravelData\Data;

class BattleReport extends Data
{
    public function __construct(
        public int $maxDamage,
        public int $skill,
        public InjureEnum $injure,
        public EquipSlotEnum $damageEquip,
        public array $logs,
        public bool $isCritical,
        public bool $isAlert,
        public bool $isWeaponDestroyed
    ) {

    }
}
