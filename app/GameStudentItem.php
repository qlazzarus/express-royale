<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameStudentItem extends Model
{
    //
    public function info()
    {
        return $this->belongsTo('App\GameItem');
    }

    public function student()
    {
        return $this->belongsTo('App\GameStudent');
    }
}
