<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Klass
 *
 * @package App
 * @mixin \Eloquent
 * @property int $id
 * @property int $competition_id
 * @property string $name
 * @property int $male_count
 * @property int $female_count
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Competition $competition
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Klass newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Klass newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Klass query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Klass whereCompetitionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Klass whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Klass whereFemaleCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Klass whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Klass whereMaleCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Klass whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Klass whereUpdatedAt($value)
 */
class Klass extends Model
{
    //
    public function competition()
    {
        return $this->belongsTo('App\Competition');
    }
}
