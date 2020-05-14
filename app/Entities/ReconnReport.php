<?php

namespace App\Entities;

use \Spatie\DataTransferObject\DataTransferObject;

class ReconnReport extends DataTransferObject implements ReconnReportInterface
{
    public int $attack;

    public int $defence;

    public int $accurancy;

    public bool $isLongRange;
}