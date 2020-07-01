<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class StudentItem
 *
 * @package App
 * @mixin \Eloquent
 * @property int $id
 * @property int $student_id
 * @property int $type
 * @property int $item_id
 * @property string $uuid
 * @property int $endurance
 * @property int $point
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Item $item
 * @property-read \App\Student $student
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StudentItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StudentItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StudentItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StudentItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StudentItem whereEndurance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StudentItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StudentItem whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StudentItem wherePoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StudentItem whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StudentItem whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StudentItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StudentItem whereUuid($value)
 */
class StudentItem extends Model
{
    //
    public function item()
    {
        return $this->belongsTo('App\Item');
    }

    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
