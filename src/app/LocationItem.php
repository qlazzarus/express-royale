<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LocationItem
 *
 * @package App
 * @mixin \Eloquent
 * @property int $id
 * @property int $item_id
 * @property int $competition_id
 * @property string $uuid
 * @property int $endurance
 * @property int $point
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Competition $competition
 * @property-read \App\Item $item
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LocationItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LocationItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LocationItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LocationItem whereCompetitionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LocationItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LocationItem whereEndurance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LocationItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LocationItem whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LocationItem wherePoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LocationItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LocationItem whereUuid($value)
 */
class LocationItem extends Model
{
    //
    public function competition()
    {
        return $this->belongsTo('App\Competition');
    }

    public function item()
    {
        return $this->belongsTo('App\Item');
    }
}
