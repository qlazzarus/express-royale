<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Casts\Factorize;

/**
 * Class Item
 * @package App
 * @mixin \Eloquent
 */
class Item extends Model
{
    //
    protected $casts = [
        'attackType' => Factorize::class,
    ];
}
