<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class GameSetting extends Enum
{
    // 반 숫자
    const MaxClasses = 2;

    // 반당 최대 수
    const ClassPerMan = 21; 
    
    // 프로그램 최저 개최일수 (최후의 한명이 남더라도, 이 시간 이하라면 게임은 계속 됩니다.)
    const MinSessionPeriod = 86400;

    // 프로그램 접수 마감일수 (가입 제한)
    const MaxSessionJoin = 172800;

    // 사망 후 가입 가능 시간
    const MinSessionRespawn = 60;

    // 기본 공격
    const DefaultAttack = 8;

    // 공격 최대 상승폭
    const AttackMaxIncrease = 5;

    // 기본 방어
    const DefaultDefence = 8;

    // 방어 최대 상승폭
    const DefenceMaxIncrease = 5;

    // 기본 체력
    const Health = 90;

    // 체력 최대 상승폭
    const HealthMaxIncrease = 20;

    // 레벨 경험치
    const LevelExperience = 16;

    // 레벌 경험치 상승값
    const LevelExperienceIncrease = 4;

    // 숙련도 경험치
    const SkillExperience = 20;

    // 스테미너 최대치
    const MaxStamina = 500;

    // 응급처치 커맨드의 소비 스테미너
    const FirstAidStamina = 30;

    // 독 조사 커맨드의 소비 스테미너
    const DetoxStamina = 10;

    // 스테미나 회복 시간
    const StaminaRecoverInterval = 1;

    // 한번에 스테미너 회복 포인트
    const StaminaRecoverIncrease = 10;

    // 체력 회복 시간
    const HealthRecoverInterval = 3;

    // 한번에 체력 회복 포인트
    const HealthRecoverIncrease = 1;
}
