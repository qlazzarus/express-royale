<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ItemSupply
 * @package App
 * @mixin \Eloquent
 */
class ItemSupply extends Model
{
    //
    public function item()
    {
        return $this->hasOne('App\Item');
    }
}
