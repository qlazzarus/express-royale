<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameClass extends Model
{
    //
    public function session()
    {
        return $this->belongsTo('App\GameSession');
    }
}
