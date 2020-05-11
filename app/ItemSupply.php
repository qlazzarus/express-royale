<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemSupply extends Model
{
    //
    public function item()
    {
        return $this->hasOne('App\Item');
    }
}
