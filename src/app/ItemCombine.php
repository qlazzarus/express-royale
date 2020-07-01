<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ItemCombine
 *
 * @package App
 * @mixin \Eloquent
 * @property int $id
 * @property int $base_id
 * @property int $combine_id
 * @property int $result_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Item $base
 * @property-read \App\Item $combine
 * @property-read \App\Item $result
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ItemCombine newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ItemCombine newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ItemCombine query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ItemCombine whereBaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ItemCombine whereCombineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ItemCombine whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ItemCombine whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ItemCombine whereResultId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ItemCombine whereUpdatedAt($value)
 */
class ItemCombine extends Model
{
    //
    public function base()
    {
        return $this->belongsTo('App\Item');
    }

    public function combine()
    {
        return $this->belongsTo('App\Item');
    }

    public function result()
    {
        return $this->belongsTo('App\Item');
    }
}
