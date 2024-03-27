<?php

namespace App\Enums\BattleRoyale;

enum GameLogTypeEnum
{
    case NewGame;
    case Entry;
    case Restrict;
    case HackingSuccess;
    case NoWinner;
    case Ending;
    case Speaker;
    case Death;
    case Kiled;
}
