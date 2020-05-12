<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NewsDetail
 * @package App
 * @mixin \Eloquent
 */
class NewsDetail extends Model
{
    //
    public function news()
    {
        return $this->belongsTo('App\News');
    }
}
