<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NewsDetail
 *
 * @package App
 * @mixin \Eloquent
 * @property int $id
 * @property int $news_id
 * @property int $type
 * @property int|null $student_id
 * @property int|null $item_id
 * @property string|null $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\News $news
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsDetail whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsDetail whereNewsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsDetail whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsDetail whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\NewsDetail whereValue($value)
 */
class NewsDetail extends Model
{
    //
    public function news()
    {
        return $this->belongsTo('App\News');
    }
}
