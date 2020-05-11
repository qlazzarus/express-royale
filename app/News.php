<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    public function competition()
    {
        return $this->belongsTo('App\Competition');
    }

    public function details()
    {
        return $this->hasMany('App\NewsDetail');
    }
}
