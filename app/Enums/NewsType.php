<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class NewsType extends Enum
{
    const NewGame = 0;
    const Entry = 1;
    const Restrict = 2;
    const HackingSuccess = 3;
    const NoWinner = 4;
    const Ending = 5;
    const Speaker = 6;
    const Death = 7;
    const Kiled = 8;
}
