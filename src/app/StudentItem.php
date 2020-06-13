<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class StudentItem
 * @package App
 * @mixin \Eloquent
 */
class StudentItem extends Model
{
    //
    public function item()
    {
        return $this->belongsTo('App\Item');
    }

    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
