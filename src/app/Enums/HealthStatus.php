<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Normal()
 * @method static static MinorWound()
 * @method static static MajorWound()
 * @method static static CriticalWound()
 * @method static static Death()
 * @method static static Heal()
 * @method static static Sleep()
 */
final class HealthStatus extends Enum
{
    // 정상
    const Normal = 0;

    // 경상
    const MinorWound = 1;

    // 중상
    const MajorWound = 2;

    // 빈사
    const CriticalWound = 3;

    // 사망
    const Death = 4;

    // 치료
    const Heal = 5;

    // 수면
    const Sleep = 6;
}
