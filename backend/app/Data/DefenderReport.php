<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class DefenderReport extends Data
{
    public function __construct(
        public int $attack,
        public int $defence,
        public int $accuracy,
        public bool $isLongRange,
        public int $stealth
    )
    {
    }
}
