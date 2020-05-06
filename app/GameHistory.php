<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameHistory extends Model
{
    //
    public function session()
    {
        return $this->belongsTo('App\GameSession');
    }
}
