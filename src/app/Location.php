<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Location
 *
 * @package App
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $message
 * @property int $specialize
 * @property int $is_restrict
 * @property int $is_next_restrict
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereIsNextRestrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereIsRestrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereSpecialize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereUpdatedAt($value)
 */
class Location extends Model
{
    //
}
