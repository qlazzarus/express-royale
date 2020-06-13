<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class UserChannel extends Enum
{
    const Email = 'email';
    const Facebook = 'facebook';
    const Google = 'google';
    const Github = 'github';
    const Kakao = 'kakao';
}