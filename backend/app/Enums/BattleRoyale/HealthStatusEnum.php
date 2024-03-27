<?php

namespace App\Enums\BattleRoyale;

enum HealthStatusEnum
{
    // 정상
    case Normal;

    // 경상
    case MinorWound;

    // 중상
    case MajorWound;

    // 빈사
    case CriticalWound;

    // 사망
    case Death;

    // 치료
    case Heal;

    // 수면
    case Sleep;
}
