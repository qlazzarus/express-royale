<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use App\Enums\EquipSlot;
use App\Item;
use App\Location;
use App\User;

class NpcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $entries = [
            [
                'user_id' => User::where('email', 'teacher@localhost')->first()->id,
                'username' => '선생님',
                'gender' => 0,
                'icon' => '/storage/avatar/42.jpg',
                'club_name' => '정부',
                'klass_name' => '담임',
                'number' => '1',
                'attack' => 45,
                'defence' => 49,
                'health' => 148,
                'max_health' => 148,
                'stamina' => 300,
                'kill_count' => 0,
                'experience' => 56, // TODO exp table (lv 10 / remain 56)
                'skill_shot' => 100,
                'skill_cut' => 100,
                'skill_throw' => 100,
                'skill_fist' => 100,
                'skill_bow' => 100,
                'skill_melee' => 100,
                'skill_bomb' => 100,
                'skill_stab' => 100,
                'location_id' => Location::where('code', 'D-6')->first()->id,
                'items' => [
                    [
                        'type' => EquipSlot::Weapon,
                        'item_id' => Item::where('code', 'weapon.beretta_m9')->first()->id,
                        'endurance' => 150,
                        'point' => 23
                    ],
                    [
                        'type' => EquipSlot::ArmorBody,
                        'item_id' => Item::where('code', 'armor_body.gym_suit')->first()->id,
                        'endurance' => 30,
                        'point' => 5
                    ],
                    [
                        'type' => EquipSlot::ArmorLeg,
                        'item_id' => Item::where('code', 'armor_leg.slipper')->first()->id,
                        'endurance' => 10,
                        'point' => 3
                    ],
                    [
                        'type' => EquipSlot::Inventory0,
                        'item_id' => Item::where('code', 'program.program_key')->first()->id,
                        'endurance' => 1,
                        'point' => 1
                    ],
                    [
                        'type' => EquipSlot::Inventory1,
                        'item_id' => Item::where('code', 'speaker.loud_speaker')->first()->id,
                        'endurance' => 1,
                        'point' => 1
                    ],
                    [
                        'type' => EquipSlot::Inventory2,
                        'item_id' => Item::where('code', 'potion_health.first_aid')->first()->id,
                        'endurance' => 3,
                        'point' => 50
                    ],
                    [
                        'type' => EquipSlot::Inventory3,
                        'item_id' => Item::where('code', 'weapon.military_knife')->first()->id,
                        'endurance' => 1,
                        'point' => 17
                    ],
                ]
            ],
            [
                'user_id' => User::where('email', 'soldier@localhost')->first()->id,
                'username' => '병사1',
                'gender' => 0,
                'icon' => '/storage/avatar/42.jpg',
                'club_name' => '정부',
                'klass_name' => '병사',
                'number' => '1',
                'attack' => 45,
                'defence' => 43,
                'health' => 147,
                'max_health' => 147,
                'stamina' => 300,
                'kill_count' => 0,
                'experience' => 56, // TODO exp table (lv 10 / remain 56)
                'skill_shot' => 100,
                'skill_cut' => 100,
                'skill_throw' => 100,
                'skill_fist' => 100,
                'skill_bow' => 100,
                'skill_melee' => 100,
                'skill_bomb' => 100,
                'skill_stab' => 100,
                'location_id' => Location::where('code', 'D-6')->first()->id,
                'items' => [
                    [
                        'type' => EquipSlot::Weapon,
                        'item_id' => Item::where('code', 'weapon.m16a2')->first()->id,
                        'endurance' => 300,
                        'point' => 30
                    ],
                    [
                        'type' => EquipSlot::ArmorHead,
                        'item_id' => Item::where('code', 'armor_head.military_helmet')->first()->id,
                        'endurance' => 30,
                        'point' => 5
                    ],
                    [
                        'type' => EquipSlot::ArmorBody,
                        'item_id' => Item::where('code', 'armor_body.military_uniform')->first()->id,
                        'endurance' => 20,
                        'point' => 6
                    ],
                    [
                        'type' => EquipSlot::ArmorLeg,
                        'item_id' => Item::where('code', 'armor_leg.military_boots')->first()->id,
                        'endurance' => 20,
                        'point' => 6
                    ],
                    [
                        'type' => EquipSlot::Inventory0,
                        'item_id' => Item::where('code', 'potion_stamina.hardtack')->first()->id,
                        'endurance' => 2,
                        'point' => 20
                    ],
                    [
                        'type' => EquipSlot::Inventory1,
                        'item_id' => Item::where('code', 'weapon.military_knife')->first()->id,
                        'endurance' => 1,
                        'point' => 17
                    ]
                ]
            ],
        ];

        foreach ($entries as $entry) {
            $id = DB::table('preset_npcs')->insertGetId(Arr::except($entry, ['items']));
            foreach ($entry['items'] as $item) {
                $item['preset_npc_id'] = $id;
                DB::table('preset_npc_items')->insert($item);
            }
        }
    }
}
