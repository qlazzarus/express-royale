<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\UserChannel
 *
 * @property int $id
 * @property int $user_id
 * @property string $channel
 * @property string $channel_id
 * @property string|null $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserChannel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserChannel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserChannel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserChannel whereChannel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserChannel whereChannelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserChannel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserChannel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserChannel wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserChannel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserChannel whereUserId($value)
 * @mixin \Eloquent
 */
class UserChannel extends Model
{
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
