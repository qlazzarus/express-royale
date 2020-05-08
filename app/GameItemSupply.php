<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameItemSupply extends Model
{
    //
    public function item()
    {
        return $this->hasOne('App\GameItem');
    }
}
