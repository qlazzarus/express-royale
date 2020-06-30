<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserChannel extends Model
{
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
