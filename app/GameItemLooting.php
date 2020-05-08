<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameItemLooting extends Model
{
    //
    public function item()
    {
        return $this->belongsTo('App\GameItem');
    }

    public function location()
    {
        return $this->belongsTo('App\GameLocation');
    }
}
