<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Klass
 * @package App
 * @mixin \Eloquent
 */
class Klass extends Model
{
    //
    public function competition()
    {
        return $this->belongsTo('App\Competition');
    }
}
