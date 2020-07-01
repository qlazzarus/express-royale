<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Casts\Factorize;

/**
 * Class Item
 *
 * @package App
 * @mixin \Eloquent
 * @property int $id
 * @property int $type
 * @property string $code
 * @property string $name
 * @property int $attack_type
 * @property int $point
 * @property int $endurance
 * @property int $ammo_require
 * @property int $ammo_capacity
 * @property int $ammo_type
 * @property int $armor_material
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereAmmoCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereAmmoRequire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereAmmoType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereArmorMaterial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereAttackType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereEndurance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item wherePoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereUpdatedAt($value)
 */
class Item extends Model
{
    //
    protected $casts = [
        'attackType' => Factorize::class,
    ];
}
