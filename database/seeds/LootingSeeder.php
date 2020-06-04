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
                'item_id' => Item::where('code', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'powder_juice')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'powder_juice')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'powder_juice')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'powder_juice')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'powder_juice')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'powder_juice')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'powder_juice')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'powder_juice')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'television')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'dining_table')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'shelf')->first()->id,
                'point' => 15,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'kitchen_knife')->first()->id,
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
                'item_id' => Item::where('code', 'frying_pan')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'frying_pan')->first()->id,
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
                'item_id' => Item::where('code', 'bracelet')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'bracelet')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('code', 'bracelet')->first()->id,
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
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'hairband')->first()->id,
                'point' => 1,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'hairband')->first()->id,
                'point' => 1,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'hairband')->first()->id,
                'point' => 1,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('code', 'hairband')->first()->id,
                'point' => 1,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
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
                'item_id' => Item::where('code', 'safety_helmet')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'safety_helmet')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'boilersuit')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'boilersuit')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'boilersuit')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'motorcycle_helmet')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('code', 'motorcycle_helmet')->first()->id,
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
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'wooden_sword')->first()->id,
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
                'item_id' => Item::where('code', 'hiking_helmet')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'hiking_helmet')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'rusty_helmet')->first()->id,
                'point' => 4,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('code', 'rusty_helmet')->first()->id,
                'point' => 4,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'musket_ball')->first()->id,
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
                'item_id' => Item::where('code', 'pickaxe')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'pickaxe')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', '스카프')->first()->id,
                'point' => 10,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'sabre')->first()->id,
                'point' => 5,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'sabre')->first()->id,
                'point' => 5,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'sabre')->first()->id,
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
                'item_id' => Item::where('code', 'safety_helmet')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'safety_helmet')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'boilersuit')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'boilersuit')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'boilersuit')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'hiking_boots')->first()->id,
                'point' => 3,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'hiking_boots')->first()->id,
                'point' => 3,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'hiking_helmet')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('code', 'hiking_helmet')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'quan_yin_bodhisattva_statue')->first()->id,
                'point' => 5,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'yama_raja_statue')->first()->id,
                'point' => 7,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'asura_statue')->first()->id,
                'point' => 10,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'ksitigarbha_statue')->first()->id,
                'point' => 8,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'monk_cloth')->first()->id,
                'point' => 8,
                'endurance' => 20,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'monk_cloth')->first()->id,
                'point' => 8,
                'endurance' => 20,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'monk_cloth')->first()->id,
                'point' => 8,
                'endurance' => 20,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'monk_cloth')->first()->id,
                'point' => 8,
                'endurance' => 20,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'shamen_cloth')->first()->id,
                'point' => 8,
                'endurance' => 15,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'shamen_cloth')->first()->id,
                'point' => 8,
                'endurance' => 15,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'shamen_cloth')->first()->id,
                'point' => 8,
                'endurance' => 15,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'shamen_cloth')->first()->id,
                'point' => 8,
                'endurance' => 15,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'shamen_cloth')->first()->id,
                'point' => 8,
                'endurance' => 15,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'shamen_cloth')->first()->id,
                'point' => 8,
                'endurance' => 15,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'clog')->first()->id,
                'point' => 2,
                'endurance' => 5,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('code', 'clog')->first()->id,
                'point' => 2,
                'endurance' => 5,
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'bow')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'bow')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'bow')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'bow')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'bow')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'bow')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'bow')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'bow')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'clog')->first()->id,
                'point' => 2,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('code', 'clog')->first()->id,
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
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
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
                'item_id' => Item::where('code', 'civil_defense_armbands')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'civil_defense_armbands')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'civil_defense_armbands')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'rural_armbands')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'rural_armbands')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'rural_armbands')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'rural_armbands')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('code', 'rural_armbands')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'stew')->first()->id,
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
                'item_id' => Item::where('code', 'fire_extinguisher')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'fire_extinguisher')->first()->id,
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
                'item_id' => Item::where('code', 'rainboots')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('code', 'rainboots')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'television')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'dining_table')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'sewing_tools')->first()->id,
                'point' => 3,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'sewing_tools')->first()->id,
                'point' => 3,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'sewing_tools')->first()->id,
                'point' => 5,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'sewing_tools')->first()->id,
                'point' => 5,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'sewing_tools')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'sewing_tools')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'shelf')->first()->id,
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
                'item_id' => Item::where('code', 'empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'curry_powder')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'soy_source')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'source')->first()->id,
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
                'item_id' => Item::where('code', 'fur_cuffs')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'ribbon')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'ribbon')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'ribbon')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'running_shoes')->first()->id,
                'point' => 3,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('code', 'running_shoes')->first()->id,
                'point' => 3,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'fire_extinguisher')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'fire_extinguisher')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'white_clothes')->first()->id,
                'point' => 10,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'white_clothes')->first()->id,
                'point' => 10,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('code', 'white_clothes')->first()->id,
                'point' => 10,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'battery')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'battery')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'battery')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'battery')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'battery')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'fire_axe')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'fire_axe')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'fire_extinguisher')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'fire_extinguisher')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'fire_extinguisher')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'fire_suit')->first()->id,
                'point' => 10,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'fire_suit')->first()->id,
                'point' => 10,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'fire_suit')->first()->id,
                'point' => 10,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'fire_helmet')->first()->id,
                'point' => 3,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('code', 'fire_helmet')->first()->id,
                'point' => 3,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
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
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'bow')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'bow')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'bow')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'bow')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'bow')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'bow')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'bow')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'bow')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'bow')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'clog')->first()->id,
                'point' => 2,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'clog')->first()->id,
                'point' => 2,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('code', 'clog')->first()->id,
                'point' => 2,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'wooden_fish')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', '솔도파')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', '솔도파')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', '솔도파')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', '솔도파')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', '솔도파')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', '솔도파')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', '솔도파')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', '솔도파')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'hairband')->first()->id,
                'point' => 1,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('code', 'hairband')->first()->id,
                'point' => 1,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'mousetrap')->first()->id,
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
                'item_id' => Item::where('code', '12gauge_shell')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', '12gauge_shell')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', '9mm_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', '9mm_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', '22lr_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', '22lr_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', '357mag_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', '357mag_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', '38sp_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', '38sp_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', '45acp_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', '45acp_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'musket_ball')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'musket_ball')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'hiking_boots')->first()->id,
                'point' => 3,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('code', 'hiking_helmet')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'television')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'dining_table')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'shelf')->first()->id,
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
                'item_id' => Item::where('code', 'sweet_potato')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'yam')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'potato')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'burdock')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'carrot')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'onion')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'garlic')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'ginger')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'frying_pan')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'frying_pan')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'frying_pan')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'frying_pan')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'frying_pan')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'frying_pan')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'fire_axe')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'fire_axe')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'fire_extinguisher')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'fire_extinguisher')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'boomerang')->first()->id,
                'point' => 9,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'boomerang')->first()->id,
                'point' => 9,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'boomerang')->first()->id,
                'point' => 9,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'boomerang')->first()->id,
                'point' => 9,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'cz_m75')->first()->id,
                'point' => 25,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'cz_m75')->first()->id,
                'point' => 25,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'cz_m75')->first()->id,
                'point' => 25,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'cz_m75')->first()->id,
                'point' => 25,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'uzi_9mm')->first()->id,
                'point' => 30,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'uzi_9mm')->first()->id,
                'point' => 30,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'uzi_9mm')->first()->id,
                'point' => 30,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('code', 'uzi_9mm')->first()->id,
                'point' => 30,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'pencil')->first()->id,
                'point' => 2,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'pencil')->first()->id,
                'point' => 2,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'pencil')->first()->id,
                'point' => 2,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'pencil')->first()->id,
                'point' => 2,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'pencil')->first()->id,
                'point' => 2,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'pencil')->first()->id,
                'point' => 2,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'pencil')->first()->id,
                'point' => 2,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'eraser')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'eraser')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'eraser')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'eraser')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'eraser')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'eraser')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'glass_flask')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'glass_flask')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'glass_flask')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'glass_flask')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'mop')->first()->id,
                'point' => 8,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'mop')->first()->id,
                'point' => 8,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'mop')->first()->id,
                'point' => 8,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'blackboard_eraser')->first()->id,
                'point' => 2,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'blackboard_eraser')->first()->id,
                'point' => 2,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'blackboard_eraser')->first()->id,
                'point' => 2,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'blackboard_eraser')->first()->id,
                'point' => 2,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'blackboard_eraser')->first()->id,
                'point' => 2,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'white_chalk')->first()->id,
                'point' => 2,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'red_chalk')->first()->id,
                'point' => 2,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'yellow_chalk')->first()->id,
                'point' => 2,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'blue_chalk')->first()->id,
                'point' => 2,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'human_body_model')->first()->id,
                'point' => 3,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'giant_set_square')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'giant_compasses')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'chair')->first()->id,
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
                'item_id' => Item::where('code', 'fire_extinguisher')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'duty_student_armband')->first()->id,
                'point' => 3,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'duty_student_armband')->first()->id,
                'point' => 3,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'duty_student_armband')->first()->id,
                'point' => 3,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'duty_student_armband')->first()->id,
                'point' => 3,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'cuffs')->first()->id,
                'point' => 2,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'cuffs')->first()->id,
                'point' => 2,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'fur_cuffs')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'indoor_shoes')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'indoor_shoes')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('code', 'indoor_shoes')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
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
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'sewing_tools')->first()->id,
                'point' => 3,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'sewing_tools')->first()->id,
                'point' => 5,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'sewing_tools')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'television')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'dining_table')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'shelf')->first()->id,
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
                'item_id' => Item::where('code', 'empty_can')->first()->id,
                'point' => 2,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'empty_can')->first()->id,
                'point' => 2,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'empty_can')->first()->id,
                'point' => 2,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'empty_can')->first()->id,
                'point' => 2,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'empty_can')->first()->id,
                'point' => 2,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'empty_can')->first()->id,
                'point' => 2,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'pot')->first()->id,
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
                'item_id' => Item::where('code', 'frying_pan')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'frying_pan')->first()->id,
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
                'item_id' => Item::where('code', 'bracelet')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'bracelet')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'bracelet')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('code', 'fur_cuffs')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'mine')->first()->id,
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
                'item_id' => Item::where('code', 'hiking_boots')->first()->id,
                'point' => 3,
                'endurance' => 5,
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('code', 'hiking_helmet')->first()->id,
                'point' => 2,
                'endurance' => 3,
            ],
            // global
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'firelock')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'masamune_great_sword')->first()->id,
                'point' => 23,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'muramasa_magical_sword')->first()->id,
                'point' => 23,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'japanese_bow')->first()->id,
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
                'item_id' => Item::where('code', 'armor')->first()->id,
                'point' => 12,
                'endurance' => 20
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'chainmail_armor')->first()->id,
                'point' => 12,
                'endurance' => 20
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'combat_helmet')->first()->id,
                'point' => 5,
                'endurance' => 10
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'precious_armor')->first()->id,
                'point' => 14,
                'endurance' => 20
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'rubber_shoes')->first()->id,
                'point' => 2,
                'endurance' => 4
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'rubber_shoes')->first()->id,
                'point' => 2,
                'endurance' => 4
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'rubber_shoes')->first()->id,
                'point' => 2,
                'endurance' => 4
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'rubber_shoes')->first()->id,
                'point' => 2,
                'endurance' => 4
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'rubber_shoes')->first()->id,
                'point' => 2,
                'endurance' => 4
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'rainboots')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'rainboots')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'high_heel')->first()->id,
                'point' => 3,
                'endurance' => 3
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'high_heel')->first()->id,
                'point' => 3,
                'endurance' => 3
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'high_heel')->first()->id,
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
                'item_id' => Item::where('code', 'ribbon')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'ribbon')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'rusty_helmet')->first()->id,
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
                'item_id' => Item::where('code', 'drill_surgent_armband')->first()->id,
                'point' => 5,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'mp_armband')->first()->id,
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
                'item_id' => Item::where('code', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'grenade')->first()->id,
                'point' => 40,
                'endurance' => 2
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'shuriken')->first()->id,
                'point' => 30,
                'endurance' => 15
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'shuriken')->first()->id,
                'point' => 30,
                'endurance' => 15
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'shuriken')->first()->id,
                'point' => 30,
                'endurance' => 15
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'shuriken')->first()->id,
                'point' => 30,
                'endurance' => 15
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'shuriken')->first()->id,
                'point' => 30,
                'endurance' => 15
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'shuriken')->first()->id,
                'point' => 30,
                'endurance' => 15
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'shuriken')->first()->id,
                'point' => 30,
                'endurance' => 15
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'heavy_crossbow')->first()->id,
                'point' => 30,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'heavy_crossbow')->first()->id,
                'point' => 30,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'heavy_crossbow')->first()->id,
                'point' => 30,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('code', 'heavy_crossbow')->first()->id,
                'point' => 30,
                'endurance' => 0
            ],
        ];

        foreach ($items as $item) {
            DB::table('item_lootings')->insert($item);
        }
    }
}
