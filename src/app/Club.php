<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Club
 *
 * @package App
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property int $is_reduce_stamina
 * @property int $is_random_skill
 * @property int $is_detect_poison
 * @property int $is_hack_possible
 * @property float $skill_shot_multiplier
 * @property float $skill_cut_multiplier
 * @property float $skill_throw_multiplier
 * @property float $skill_fist_multiplier
 * @property float $skill_bow_multiplier
 * @property float $skill_melee_multiplier
 * @property float $skill_bomb_multiplier
 * @property float $skill_stab_multiplier
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club whereIsDetectPoison($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club whereIsHackPossible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club whereIsRandomSkill($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club whereIsReduceStamina($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club whereSkillBombMultiplier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club whereSkillBowMultiplier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club whereSkillCutMultiplier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club whereSkillFistMultiplier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club whereSkillMeleeMultiplier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club whereSkillShotMultiplier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club whereSkillStabMultiplier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club whereSkillThrowMultiplier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Club whereUpdatedAt($value)
 */
class Club extends Model
{
    //
}
