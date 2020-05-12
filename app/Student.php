<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 * @package App
 * @mixin \Eloquent
 */
class Student extends Model
{
    //
    public function competition()
    {
        return $this->belongsTo('App\Competition');
    }

    public function items()
    {
        return $this->hasMany('App\StudentItem');
    }

    public function klass()
    {
        return $this->belongsTo('App\Klass');
    }

    public function location()
    {
        return $this->belongsTo('App\Location');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
