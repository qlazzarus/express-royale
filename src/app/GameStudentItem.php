<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameStudentItem extends Model
{
    //
    public function student()
    {
        return $this->belongsTo('App\GameStudent');
    }
}
