<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LocationItem
 * @package App
 * @mixin \Eloquent
 */
class LocationItem extends Model
{
    //
    public function competition()
    {
        return $this->belongsTo('App\Competition');
    }

    public function item()
    {
        return $this->belongsTo('App\Item');
    }
}
