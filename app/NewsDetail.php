<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsDetail extends Model
{
    //
    public function news()
    {
        return $this->belongTo('App\News');
    }
}
