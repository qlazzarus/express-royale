<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameSession extends Model
{
    //
    public function classes()
    {
        return $this->hasMany('App\GameClass');
    }

    public function histories()
    {
        return $this->hasMany('App\GameSession');
    }

    public function students()
    {
        return $this->hasMany('App\GameStudent');
    }
}
