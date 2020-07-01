<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PresetNpcItem
 *
 * @package App
 * @mixin \Eloquent
 * @property int $id
 * @property int $preset_npc_id
 * @property int $type
 * @property int $item_id
 * @property int $endurance
 * @property int $point
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PresetNpcItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PresetNpcItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PresetNpcItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PresetNpcItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PresetNpcItem whereEndurance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PresetNpcItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PresetNpcItem whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PresetNpcItem wherePoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PresetNpcItem wherePresetNpcId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PresetNpcItem whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PresetNpcItem whereUpdatedAt($value)
 */
class PresetNpcItem extends Model
{
    //
}
