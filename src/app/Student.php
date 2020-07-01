<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 *
 * @package App
 * @mixin \Eloquent
 * @property int $id
 * @property int $competition_id
 * @property int $user_id
 * @property int $klass_id
 * @property int $club_id
 * @property string $username
 * @property int $gender
 * @property string $icon
 * @property string $club_name
 * @property string $klass_name
 * @property string $number
 * @property string $message_killing
 * @property string $message_dying
 * @property string $message_appeal
 * @property int $attack
 * @property int $defence
 * @property int $health
 * @property int $max_health
 * @property int $stamina
 * @property int $kill_count
 * @property int $experience
 * @property int $skill_shot
 * @property int $skill_cut
 * @property int $skill_throw
 * @property int $skill_fist
 * @property int $skill_bow
 * @property int $skill_melee
 * @property int $skill_bomb
 * @property int $skill_stab
 * @property int $tactics
 * @property int $injured
 * @property int $location_id
 * @property int $status
 * @property string $status_changed_at
 * @property int|null $last_attacker_id
 * @property string|null $death_cause
 * @property int|null $death_by
 * @property string|null $deathed_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Competition $competition
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\StudentItem[] $items
 * @property-read int|null $items_count
 * @property-read \App\Klass $klass
 * @property-read \App\Location $location
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereAttack($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereClubId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereClubName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereCompetitionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereDeathBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereDeathCause($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereDeathedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereDefence($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereExperience($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereHealth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereInjured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereKillCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereKlassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereKlassName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereLastAttackerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereMaxHealth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereMessageAppeal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereMessageDying($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereMessageKilling($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereSkillBomb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereSkillBow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereSkillCut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereSkillFist($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereSkillMelee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereSkillShot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereSkillStab($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereSkillThrow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereStamina($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereStatusChangedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereTactics($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereUsername($value)
 */
class Student extends Model
{
    //
    public function competition()
    {
        return $this->belongsTo('App\Competition');
    }

    public function items()
    {
        return $this->hasMany('App\StudentItem');
    }

    public function klass()
    {
        return $this->belongsTo('App\Klass');
    }

    public function location()
    {
        return $this->belongsTo('App\Location');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
