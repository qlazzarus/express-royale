<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ItemCombine
 * @package App
 * @mixin \Eloquent
 */
class ItemCombine extends Model
{
    //
    public function base()
    {
        return $this->belongsTo('App\Item');
    }

    public function combine()
    {
        return $this->belongsTo('App\Item');
    }

    public function result()
    {
        return $this->belongsTo('App\Item');
    }
}
