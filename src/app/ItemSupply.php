<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ItemSupply
 *
 * @package App
 * @mixin \Eloquent
 * @property int $id
 * @property int $type
 * @property int $item_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Item|null $item
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ItemSupply newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ItemSupply newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ItemSupply query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ItemSupply whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ItemSupply whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ItemSupply whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ItemSupply whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ItemSupply whereUpdatedAt($value)
 */
class ItemSupply extends Model
{
    //
    public function item()
    {
        return $this->hasOne('App\Item');
    }
}
