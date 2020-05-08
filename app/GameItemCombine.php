<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameItemCombine extends Model
{
    //
    public function base()
    {
        return $this->belongsTo('App\GameItem');
    }

    public function combine()
    {
        return $this->belongsTo('App\GameItem');
    }

    public function result()
    {
        return $this->belongsTo('App\GameItem');
    }
}
