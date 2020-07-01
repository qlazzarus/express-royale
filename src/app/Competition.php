<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Competition
 *
 * @package App
 * @mixin \Eloquent
 * @property int $id
 * @property int $status
 * @property int $male_count
 * @property int $female_count
 * @property int|null $winner_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Klass[] $klasses
 * @property-read int|null $klasses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\LocationItem[] $locationItems
 * @property-read int|null $location_items_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\News[] $news
 * @property-read int|null $news_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Student[] $students
 * @property-read int|null $students_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Competition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Competition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Competition query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Competition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Competition whereFemaleCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Competition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Competition whereMaleCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Competition whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Competition whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Competition whereWinnerId($value)
 */
class Competition extends Model
{
    //
    public function klasses()
    {
        return $this->hasMany('App\Klass');
    }

    public function news()
    {
        return $this->hasMany('App\News');
    }

    public function locationItems()
    {
        return $this->hasMany('App\LocationItem');
    }

    public function students()
    {
        return $this->hasMany('App\Student');
    }
}
