<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
