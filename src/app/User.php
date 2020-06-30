<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class User
 * @package App
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    public function students()
    {
        return $this->hasMany('App\Student');
    }

    public function channels()
    {
        return $this->hasMany('App\UserChannel');
    }
}
