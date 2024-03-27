<?php

namespace App\Enums\BattleRoyale;

final class GameSetting
{
    // 반 숫자
    const int MaxClasses = 2;

    // 반당 최대 수
    const int ClassPerMan = 21;

    // 프로그램 최저 개최일수 (최후의 한명이 남더라도, 이 시간 이하라면 게임은 계속 됩니다.)
    const int MinSessionPeriod = 86400;

    // 프로그램 접수 마감일수 (가입 제한)
    const int MaxSessionJoin = 172800;

    // 사망 후 가입 가능 시간
    const int MinSessionRespawn = 60;

    // 기본 공격
    const int DefaultAttack = 8;

    // 공격 최대 상승폭
    const int AttackMaxIncrease = 5;

    // 기본 방어
    const int DefaultDefence = 8;

    // 방어 최대 상승폭
    const int DefenceMaxIncrease = 5;

    // 기본 체력
    const int Health = 90;

    // 체력 최대 상승폭
    const int HealthMaxIncrease = 20;

    // 레벨 경험치
    const int LevelExperience = 16;

    // 레벌 경험치 상승값
    const int LevelExperienceIncrease = 4;

    // 숙련도 경험치
    const int SkillExperience = 20;

    // 스테미너 최대치
    const int MaxStamina = 500;

    // 응급처치 커맨드의 소비 스테미너
    const int FirstAidStamina = 30;

    // 독 조사 커맨드의 소비 스테미너
    const int DetoxStamina = 10;

    // 스테미나 회복 시간
    const int StaminaRecoverInterval = 1;

    // 한번에 스테미너 회복 포인트
    const int StaminaRecoverIncrease = 10;

    // 체력 회복 시간
    const int HealthRecoverInterval = 3;

    // 한번에 체력 회복 포인트
    const int HealthRecoverIncrease = 1;
}
