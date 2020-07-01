<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 *
 * @package App
 * @mixin \Eloquent
 * @property int $id
 * @property int $competition_id
 * @property int $type
 * @property string $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Competition $competition
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\NewsDetail[] $details
 * @property-read int|null $details_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereCompetitionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\News whereUpdatedAt($value)
 */
class News extends Model
{
    //
    public function competition()
    {
        return $this->belongsTo('App\Competition');
    }

    public function details()
    {
        return $this->hasMany('App\NewsDetail');
    }
}
