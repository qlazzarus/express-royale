<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klass extends Model
{
    //
    public function competition()
    {
        return $this->belongsTo('App\Competition');
    }
}
