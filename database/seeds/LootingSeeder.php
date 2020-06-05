<?php

use Illuminate\Database\Seeder;
use App\Item;
use App\Location;

class LootingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $items = [
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.powder_juice')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.powder_juice')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.powder_juice')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.powder_juice')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.powder_juice')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.powder_juice')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.powder_juice')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.powder_juice')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.television')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.dining_table')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.shelf')->first()->id,
                'point' => 15,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.chains')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.chains')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.frying_pan')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.frying_pan')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'item.gasoline')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'item.gasoline')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'item.gasoline')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'item.gasoline')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'item.disel')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'item.disel')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'item.disel')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'item.disel')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'armor_arm.bracelet')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'armor_arm.bracelet')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'armor_arm.bracelet')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'armor_head.hairband')->first()->id,
                'point' => 1,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'armor_head.hairband')->first()->id,
                'point' => 1,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'armor_head.hairband')->first()->id,
                'point' => 1,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'armor_head.hairband')->first()->id,
                'point' => 1,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'item.nail')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'item.nail')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'item.nail')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'item.nail')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'item.nail')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'item.nail')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'item.nail')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'item.nail')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'item.nail')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'item.nail')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'item.nail')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'item.nail')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'item.fuze')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'item.fuze')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'item.fuze')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'item.fuze')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'item.fuze')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'item.fuze')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'armor_head.safety_helmet')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'armor_head.safety_helmet')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'armor_body.boilersuit')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'armor_body.boilersuit')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'armor_body.boilersuit')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'armor_head.motorcycle_helmet')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'armor_head.motorcycle_helmet')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.sickle')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.sickle')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.bamboo')->first()->id,
                'point' => 6,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.bamboo')->first()->id,
                'point' => 6,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.bamboo')->first()->id,
                'point' => 6,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.bamboo')->first()->id,
                'point' => 6,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'armor_head.hiking_helmet')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'armor_head.hiking_helmet')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'armor_head.rusty_helmet')->first()->id,
                'point' => 4,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'armor_head.rusty_helmet')->first()->id,
                'point' => 4,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'ammo.musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.pickaxe')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.pickaxe')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.sabre')->first()->id,
                'point' => 5,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.sabre')->first()->id,
                'point' => 5,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.sabre')->first()->id,
                'point' => 5,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'item.fuze')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'item.fuze')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'item.fuze')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'item.fuze')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'item.fuze')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'item.fuze')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'armor_head.safety_helmet')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'armor_head.safety_helmet')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'armor_body.boilersuit')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'armor_body.boilersuit')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'armor_body.boilersuit')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'armor_leg.hiking_boots')->first()->id,
                'point' => 3,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'armor_leg.hiking_boots')->first()->id,
                'point' => 3,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'armor_head.hiking_helmet')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'armor_head.hiking_helmet')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.quan_yin_bodhisattva_statue')->first()->id,
                'point' => 5,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.yama_raja_statue')->first()->id,
                'point' => 7,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.asura_statue')->first()->id,
                'point' => 10,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.ksitigarbha_statue')->first()->id,
                'point' => 8,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'armor_body.monk_cloth')->first()->id,
                'point' => 8,
                'endurance' => 20,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'armor_body.monk_cloth')->first()->id,
                'point' => 8,
                'endurance' => 20,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'armor_body.monk_cloth')->first()->id,
                'point' => 8,
                'endurance' => 20,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'armor_body.monk_cloth')->first()->id,
                'point' => 8,
                'endurance' => 20,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'armor_body.shamen_cloth')->first()->id,
                'point' => 8,
                'endurance' => 15,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'armor_body.shamen_cloth')->first()->id,
                'point' => 8,
                'endurance' => 15,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'armor_body.shamen_cloth')->first()->id,
                'point' => 8,
                'endurance' => 15,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'armor_body.shamen_cloth')->first()->id,
                'point' => 8,
                'endurance' => 15,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'armor_body.shamen_cloth')->first()->id,
                'point' => 8,
                'endurance' => 15,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'armor_body.shamen_cloth')->first()->id,
                'point' => 8,
                'endurance' => 15,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'armor_leg.clog')->first()->id,
                'point' => 2,
                'endurance' => 5,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'armor_leg.clog')->first()->id,
                'point' => 2,
                'endurance' => 5,
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.bow')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.bow')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.bow')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.bow')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.bow')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.bow')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.bow')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.bow')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'armor_leg.clog')->first()->id,
                'point' => 2,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'armor_leg.clog')->first()->id,
                'point' => 2,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'speaker.loud_speaker')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'armor_arm.civil_defense_armbands')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'armor_arm.civil_defense_armbands')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'armor_arm.civil_defense_armbands')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'armor_arm.rural_armbands')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'armor_arm.rural_armbands')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'armor_arm.rural_armbands')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'armor_arm.rural_armbands')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'armor_arm.rural_armbands')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'weapon.sickle')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'weapon.sickle')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'weapon.fire_extinguisher')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'weapon.fire_extinguisher')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'armor_leg.rainboots')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'armor_leg.rainboots')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.television')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.dining_table')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'armor_refine.sewing_tools')->first()->id,
                'point' => 3,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'armor_refine.sewing_tools')->first()->id,
                'point' => 3,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'armor_refine.sewing_tools')->first()->id,
                'point' => 5,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'armor_refine.sewing_tools')->first()->id,
                'point' => 5,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'armor_refine.sewing_tools')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'armor_refine.sewing_tools')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.shelf')->first()->id,
                'point' => 15,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_bottle')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_bottle')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_bottle')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_bottle')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_bottle')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.curry_powder')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.soy_source')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.source')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'armor_arm.fur_cuffs')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'armor_head.ribbon')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'armor_head.ribbon')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'armor_head.ribbon')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'armor_leg.running_shoes')->first()->id,
                'point' => 3,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'armor_leg.running_shoes')->first()->id,
                'point' => 3,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'weapon.fire_extinguisher')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'weapon.fire_extinguisher')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'armor_body.white_clothes')->first()->id,
                'point' => 10,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'armor_body.white_clothes')->first()->id,
                'point' => 10,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'armor_body.white_clothes')->first()->id,
                'point' => 10,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'battery.battery')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'battery.battery')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'battery.battery')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'battery.battery')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'battery.battery')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.fire_axe')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.fire_axe')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.fire_extinguisher')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.fire_extinguisher')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'weapon.fire_extinguisher')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'armor_body.fire_suit')->first()->id,
                'point' => 10,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'armor_body.fire_suit')->first()->id,
                'point' => 10,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'armor_body.fire_suit')->first()->id,
                'point' => 10,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'armor_head.fire_helmet')->first()->id,
                'point' => 3,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'armor_head.fire_helmet')->first()->id,
                'point' => 3,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.bamboo')->first()->id,
                'point' => 6,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.bamboo')->first()->id,
                'point' => 6,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.bamboo')->first()->id,
                'point' => 6,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.bamboo')->first()->id,
                'point' => 6,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.bow')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.bow')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.bow')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.bow')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.bow')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.bow')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.bow')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.bow')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'weapon.bow')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'armor_leg.clog')->first()->id,
                'point' => 2,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'armor_leg.clog')->first()->id,
                'point' => 2,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'armor_leg.clog')->first()->id,
                'point' => 2,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'weapon.wooden_fish')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'armor_head.hairband')->first()->id,
                'point' => 1,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'armor_head.hairband')->first()->id,
                'point' => 1,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'trap.mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'trap.mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'trap.mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'trap.mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'trap.mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'trap.mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'trap.mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'trap.mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'trap.mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'trap.mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'trap.mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'weapon.dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.12gauge_shell')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.12gauge_shell')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.9mm_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.9mm_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.22lr_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.22lr_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.357mag_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.357mag_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.38sp_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.38sp_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.45acp_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.45acp_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.musket_ball')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'ammo.musket_ball')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'armor_leg.hiking_boots')->first()->id,
                'point' => 3,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'armor_head.hiking_helmet')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.television')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.dining_table')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.shelf')->first()->id,
                'point' => 15,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.precious_sword')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.sweet_potato')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.yam')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.potato')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.burdock')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.carrot')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.onion')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.garlic')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'potion_stamina.ginger')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.frying_pan')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.frying_pan')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.frying_pan')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.frying_pan')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.frying_pan')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.frying_pan')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.fire_axe')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.fire_axe')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.fire_extinguisher')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.fire_extinguisher')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.boomerang')->first()->id,
                'point' => 9,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.boomerang')->first()->id,
                'point' => 9,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.boomerang')->first()->id,
                'point' => 9,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.boomerang')->first()->id,
                'point' => 9,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.cz_m75')->first()->id,
                'point' => 25,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.cz_m75')->first()->id,
                'point' => 25,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.cz_m75')->first()->id,
                'point' => 25,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.cz_m75')->first()->id,
                'point' => 25,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.uzi_9mm')->first()->id,
                'point' => 30,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.uzi_9mm')->first()->id,
                'point' => 30,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.uzi_9mm')->first()->id,
                'point' => 30,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.uzi_9mm')->first()->id,
                'point' => 30,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.pencil')->first()->id,
                'point' => 2,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.pencil')->first()->id,
                'point' => 2,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.pencil')->first()->id,
                'point' => 2,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.pencil')->first()->id,
                'point' => 2,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.pencil')->first()->id,
                'point' => 2,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.pencil')->first()->id,
                'point' => 2,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.pencil')->first()->id,
                'point' => 2,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.eraser')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.eraser')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.eraser')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.eraser')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.eraser')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.eraser')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_flask')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_flask')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_flask')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_flask')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.mop')->first()->id,
                'point' => 8,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.mop')->first()->id,
                'point' => 8,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.mop')->first()->id,
                'point' => 8,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'potion_health.pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.blackboard_eraser')->first()->id,
                'point' => 2,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.blackboard_eraser')->first()->id,
                'point' => 2,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.blackboard_eraser')->first()->id,
                'point' => 2,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.blackboard_eraser')->first()->id,
                'point' => 2,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.blackboard_eraser')->first()->id,
                'point' => 2,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.white_chalk')->first()->id,
                'point' => 2,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.red_chalk')->first()->id,
                'point' => 2,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.yellow_chalk')->first()->id,
                'point' => 2,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.blue_chalk')->first()->id,
                'point' => 2,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.human_body_model')->first()->id,
                'point' => 3,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.giant_set_square')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.giant_compasses')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.chair')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'speaker.loud_speaker')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'weapon.fire_extinguisher')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'armor_arm.duty_student_armband')->first()->id,
                'point' => 3,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'armor_arm.duty_student_armband')->first()->id,
                'point' => 3,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'armor_arm.duty_student_armband')->first()->id,
                'point' => 3,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'armor_arm.duty_student_armband')->first()->id,
                'point' => 3,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'armor_arm.cuffs')->first()->id,
                'point' => 2,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'armor_arm.cuffs')->first()->id,
                'point' => 2,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'armor_arm.fur_cuffs')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'armor_leg.indoor_shoes')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'armor_leg.indoor_shoes')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'armor_leg.indoor_shoes')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'armor_refine.sewing_tools')->first()->id,
                'point' => 3,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'armor_refine.sewing_tools')->first()->id,
                'point' => 5,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'armor_refine.sewing_tools')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.television')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.dining_table')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.shelf')->first()->id,
                'point' => 15,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.precious_sword')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_bottle')->first()->id,
                'point' => 1,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_bottle')->first()->id,
                'point' => 1,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_bottle')->first()->id,
                'point' => 1,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_bottle')->first()->id,
                'point' => 1,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_bottle')->first()->id,
                'point' => 1,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_bottle')->first()->id,
                'point' => 1,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_bottle')->first()->id,
                'point' => 1,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_bottle')->first()->id,
                'point' => 1,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_bottle')->first()->id,
                'point' => 1,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_bottle')->first()->id,
                'point' => 1,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_bottle')->first()->id,
                'point' => 1,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_bottle')->first()->id,
                'point' => 1,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_can')->first()->id,
                'point' => 2,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_can')->first()->id,
                'point' => 2,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_can')->first()->id,
                'point' => 2,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_can')->first()->id,
                'point' => 2,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_can')->first()->id,
                'point' => 2,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.empty_can')->first()->id,
                'point' => 2,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.chains')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.chains')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.frying_pan')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'weapon.frying_pan')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'item.gasoline')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'item.gasoline')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'item.gasoline')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'item.gasoline')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'item.disel')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'item.disel')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'item.disel')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'item.disel')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'armor_arm.bracelet')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'armor_arm.bracelet')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'armor_arm.bracelet')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'armor_arm.fur_cuffs')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'trap.mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'trap.mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'trap.mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'trap.mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'trap.mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'trap.mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'trap.mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'trap.mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'trap.mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'trap.mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'trap.mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'trap.mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'trap.mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'trap.mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'trap.mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'trap.mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'ammo.musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'trap.mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'armor_leg.hiking_boots')->first()->id,
                'point' => 3,
                'endurance' => 5,
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'armor_head.hiking_helmet')->first()->id,
                'point' => 2,
                'endurance' => 3,
            ],
            // global
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ammo.musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'potion_health.water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.firelock')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.masamune_great_sword')->first()->id,
                'point' => 23,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.muramasa_magical_sword')->first()->id,
                'point' => 23,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.japanese_bow')->first()->id,
                'point' => 18,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.precious_sword')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'armor_body.armor')->first()->id,
                'point' => 12,
                'endurance' => 20
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'armor_body.chainmail_armor')->first()->id,
                'point' => 12,
                'endurance' => 20
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'armor_head.combat_helmet')->first()->id,
                'point' => 5,
                'endurance' => 10
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'armor_body.precious_armor')->first()->id,
                'point' => 14,
                'endurance' => 20
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'armor_leg.rubber_shoes')->first()->id,
                'point' => 2,
                'endurance' => 4
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'armor_leg.rubber_shoes')->first()->id,
                'point' => 2,
                'endurance' => 4
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'armor_leg.rubber_shoes')->first()->id,
                'point' => 2,
                'endurance' => 4
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'armor_leg.rubber_shoes')->first()->id,
                'point' => 2,
                'endurance' => 4
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'armor_leg.rubber_shoes')->first()->id,
                'point' => 2,
                'endurance' => 4
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'armor_leg.rainboots')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'armor_leg.rainboots')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'armor_leg.high_heel')->first()->id,
                'point' => 3,
                'endurance' => 3
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'armor_leg.high_heel')->first()->id,
                'point' => 3,
                'endurance' => 3
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'armor_leg.high_heel')->first()->id,
                'point' => 3,
                'endurance' => 3
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'armor_leg.military_boots')->first()->id,
                'point' => 3,
                'endurance' => 3
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'armor_head.ribbon')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'armor_head.ribbon')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'armor_head.rusty_helmet')->first()->id,
                'point' => 4,
                'endurance' => 3
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'armor_head.military_helmet')->first()->id,
                'point' => 5,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'armor_arm.drill_surgent_armband')->first()->id,
                'point' => 5,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'armor_arm.mp_armband')->first()->id,
                'point' => 5,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'armor_body.military_uniform')->first()->id,
                'point' => 10,
                'endurance' => 40
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'radar.radar')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.soldering_iron')->first()->id,
                'point' => 6,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.broken_laptop')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.grenade')->first()->id,
                'point' => 40,
                'endurance' => 2
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.shuriken')->first()->id,
                'point' => 30,
                'endurance' => 15
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.shuriken')->first()->id,
                'point' => 30,
                'endurance' => 15
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.shuriken')->first()->id,
                'point' => 30,
                'endurance' => 15
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.shuriken')->first()->id,
                'point' => 30,
                'endurance' => 15
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.shuriken')->first()->id,
                'point' => 30,
                'endurance' => 15
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.shuriken')->first()->id,
                'point' => 30,
                'endurance' => 15
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.shuriken')->first()->id,
                'point' => 30,
                'endurance' => 15
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.heavy_crossbow')->first()->id,
                'point' => 30,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.heavy_crossbow')->first()->id,
                'point' => 30,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.heavy_crossbow')->first()->id,
                'point' => 30,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'weapon.heavy_crossbow')->first()->id,
                'point' => 30,
                'endurance' => 0
            ],
        ];

        foreach ($items as $item) {
            DB::table('item_lootings')->insert($item);
        }
    }
}
