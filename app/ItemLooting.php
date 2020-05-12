<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ItemLooting
 * @package App
 * @mixin \Eloquent
 */
class ItemLooting extends Model
{
    //
    public function item()
    {
        return $this->belongsTo('App\Item');
    }

    public function location()
    {
        return $this->belongsTo('App\Location');
    }
}
