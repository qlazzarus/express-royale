<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompetitionNews extends Model
{
    //
    public function competition()
    {
        return $this->belongsTo('App\Competition');
    }
}
