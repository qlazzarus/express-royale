<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ItemLooting
 *
 * @package App
 * @mixin \Eloquent
 * @property int $id
 * @property int $location_id
 * @property int $item_id
 * @property int $point
 * @property int $endurance
 * @property int $is_trap_activated
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Item $item
 * @property-read \App\Location $location
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ItemLooting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ItemLooting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ItemLooting query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ItemLooting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ItemLooting whereEndurance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ItemLooting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ItemLooting whereIsTrapActivated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ItemLooting whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ItemLooting whereLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ItemLooting wherePoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ItemLooting whereUpdatedAt($value)
 */
class ItemLooting extends Model
{
    //
    public function item()
    {
        return $this->belongsTo('App\Item');
    }

    public function location()
    {
        return $this->belongsTo('App\Location');
    }
}
