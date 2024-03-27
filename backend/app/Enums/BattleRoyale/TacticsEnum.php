<?php

namespace App\Enums\BattleRoyale;

enum TacticsEnum
{
    // 보통
    case Normal;

    // 공격중시
    case Attack;

    // 방어중시
    case Defence;

    // 탐색행동
    case Investigate;

    // 은밀행동
    case Stealth;

    // 연속공격
    case Streak;
}
