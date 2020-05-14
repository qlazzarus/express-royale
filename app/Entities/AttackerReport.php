<?php

namespace App\Entities;

class AttackerReport extends ReconnReport implements ReconnReportInterface
{
    public int $find;

    public int $ambush;
}