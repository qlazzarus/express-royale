<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameStudent extends Model
{
    //
    public function klass()
    {
        return $this->belongsTo('App\GameClass', 'class_id');
    }

    public function session()
    {
        return $this->belongsTo('App\GameSession');
    }

    public function item()
    {
        return $this->hasMany('App\GameStudentItem');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
