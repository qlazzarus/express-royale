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
                'item_id' => Item::where('name', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'powder_juice')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'powder_juice')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'powder_juice')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'powder_juice')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'powder_juice')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'powder_juice')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'powder_juice')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'powder_juice')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'television')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'dining_table')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'shelf')->first()->id,
                'point' => 15,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'chains')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'chains')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'frying_pan')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'frying_pan')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'gasoline')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'gasoline')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'gasoline')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'gasoline')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'disel')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'disel')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'disel')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'disel')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'bracelet')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'bracelet')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'I-6')->first()->id,
                'item_id' => Item::where('name', 'bracelet')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'hairband')->first()->id,
                'point' => 1,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'hairband')->first()->id,
                'point' => 1,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'hairband')->first()->id,
                'point' => 1,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'C-4')->first()->id,
                'item_id' => Item::where('name', 'hairband')->first()->id,
                'point' => 1,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'nail')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'nail')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'nail')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'nail')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'nail')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'nail')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'nail')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'nail')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'nail')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'nail')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'nail')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'nail')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'fuze')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'fuze')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'fuze')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'fuze')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'fuze')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'fuze')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'safety_helmet')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'safety_helmet')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'boilersuit')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'boilersuit')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'boilersuit')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'motorcycle_helmet')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'E-7')->first()->id,
                'item_id' => Item::where('name', 'motorcycle_helmet')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'sickle')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'sickle')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'wooden_sword')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'bamboo')->first()->id,
                'point' => 6,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'bamboo')->first()->id,
                'point' => 6,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'bamboo')->first()->id,
                'point' => 6,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'bamboo')->first()->id,
                'point' => 6,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'hiking_helmet')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'hiking_helmet')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'rusty_helmet')->first()->id,
                'point' => 4,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'H-4')->first()->id,
                'item_id' => Item::where('name', 'rusty_helmet')->first()->id,
                'point' => 4,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'pickaxe')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'pickaxe')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', '스카프')->first()->id,
                'point' => 10,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'sabre')->first()->id,
                'point' => 5,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'sabre')->first()->id,
                'point' => 5,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'sabre')->first()->id,
                'point' => 5,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'rocks')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'fuze')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'fuze')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'fuze')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'fuze')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'fuze')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'fuze')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'safety_helmet')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'safety_helmet')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'boilersuit')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'boilersuit')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'boilersuit')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'hiking_boots')->first()->id,
                'point' => 3,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'hiking_boots')->first()->id,
                'point' => 3,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'hiking_helmet')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'F-5')->first()->id,
                'item_id' => Item::where('name', 'hiking_helmet')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('name', 'quan_yin_bodhisattva_statue')->first()->id,
                'point' => 5,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('name', 'yama_raja_statue')->first()->id,
                'point' => 7,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('name', 'asura_statue')->first()->id,
                'point' => 10,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('name', 'ksitigarbha_statue')->first()->id,
                'point' => 8,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('name', 'monk_cloth')->first()->id,
                'point' => 8,
                'endurance' => 20,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('name', 'monk_cloth')->first()->id,
                'point' => 8,
                'endurance' => 20,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('name', 'monk_cloth')->first()->id,
                'point' => 8,
                'endurance' => 20,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('name', 'monk_cloth')->first()->id,
                'point' => 8,
                'endurance' => 20,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('name', 'shamen_cloth')->first()->id,
                'point' => 8,
                'endurance' => 15,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('name', 'shamen_cloth')->first()->id,
                'point' => 8,
                'endurance' => 15,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('name', 'shamen_cloth')->first()->id,
                'point' => 8,
                'endurance' => 15,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('name', 'shamen_cloth')->first()->id,
                'point' => 8,
                'endurance' => 15,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('name', 'shamen_cloth')->first()->id,
                'point' => 8,
                'endurance' => 15,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('name', 'shamen_cloth')->first()->id,
                'point' => 8,
                'endurance' => 15,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('name', 'clog')->first()->id,
                'point' => 2,
                'endurance' => 5,
            ],
            [
                'location_id' => Location::where('code', 'C-6')->first()->id,
                'item_id' => Item::where('name', 'clog')->first()->id,
                'point' => 2,
                'endurance' => 5,
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'bow')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'bow')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'bow')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'bow')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'bow')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'bow')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'bow')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'bow')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'clog')->first()->id,
                'point' => 2,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-2')->first()->id,
                'item_id' => Item::where('name', 'clog')->first()->id,
                'point' => 2,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'loud_speaker')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'civil_defense_armbands')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'civil_defense_armbands')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'civil_defense_armbands')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'rural_armbands')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'rural_armbands')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'rural_armbands')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'rural_armbands')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'C-3')->first()->id,
                'item_id' => Item::where('name', 'rural_armbands')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'stew')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'sickle')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'sickle')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'fire_extinguisher')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'fire_extinguisher')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'rainboots')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'I-10')->first()->id,
                'item_id' => Item::where('name', 'rainboots')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'television')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'dining_table')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'sewing_tools')->first()->id,
                'point' => 3,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'sewing_tools')->first()->id,
                'point' => 3,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'sewing_tools')->first()->id,
                'point' => 5,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'sewing_tools')->first()->id,
                'point' => 5,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'sewing_tools')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'sewing_tools')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'shelf')->first()->id,
                'point' => 15,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'empty_bottle')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'empty_bottle')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'empty_bottle')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'empty_bottle')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'empty_bottle')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'empty_can')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'curry_powder')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'soy_source')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'source')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'fur_cuffs')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'ribbon')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'ribbon')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'ribbon')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'running_shoes')->first()->id,
                'point' => 3,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-2')->first()->id,
                'item_id' => Item::where('name', 'running_shoes')->first()->id,
                'point' => 3,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'energy_drink')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'fire_extinguisher')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'fire_extinguisher')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'white_clothes')->first()->id,
                'point' => 10,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'white_clothes')->first()->id,
                'point' => 10,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'I-7')->first()->id,
                'item_id' => Item::where('name', 'white_clothes')->first()->id,
                'point' => 10,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'battery')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'battery')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'battery')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'battery')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'battery')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'fire_axe')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'fire_axe')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'fire_extinguisher')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'fire_extinguisher')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'fire_extinguisher')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'fire_suit')->first()->id,
                'point' => 10,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'fire_suit')->first()->id,
                'point' => 10,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'fire_suit')->first()->id,
                'point' => 10,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'fire_helmet')->first()->id,
                'point' => 3,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'C-5')->first()->id,
                'item_id' => Item::where('name', 'fire_helmet')->first()->id,
                'point' => 3,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'D-4')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'bamboo')->first()->id,
                'point' => 6,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'bamboo')->first()->id,
                'point' => 6,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'bamboo')->first()->id,
                'point' => 6,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'bamboo')->first()->id,
                'point' => 6,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'arrow')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'bow')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'bow')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'bow')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'bow')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'bow')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'bow')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'bow')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'bow')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'bow')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'clog')->first()->id,
                'point' => 2,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'clog')->first()->id,
                'point' => 2,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'G-6')->first()->id,
                'item_id' => Item::where('name', 'clog')->first()->id,
                'point' => 2,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', 'wooden_fish')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', '솔도파')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', '솔도파')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', '솔도파')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', '솔도파')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', '솔도파')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', '솔도파')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', '솔도파')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', '솔도파')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', 'hairband')->first()->id,
                'point' => 1,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'F-8')->first()->id,
                'item_id' => Item::where('name', 'hairband')->first()->id,
                'point' => 1,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'dynamite')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', '12gauge_shell')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', '12gauge_shell')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', '9mm_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', '9mm_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', '22lr_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', '22lr_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', '357mag_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', '357mag_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', '38sp_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', '38sp_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', '45acp_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', '45acp_ammo')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'musket_ball')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'musket_ball')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'hiking_boots')->first()->id,
                'point' => 3,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'A-2')->first()->id,
                'item_id' => Item::where('name', 'hiking_helmet')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'television')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'dining_table')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'shelf')->first()->id,
                'point' => 15,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'precious_sword')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'sweet_potato')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'yam')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'potato')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'burdock')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'carrot')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'onion')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'garlic')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'ginger')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'frying_pan')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'frying_pan')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'frying_pan')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'frying_pan')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'frying_pan')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'frying_pan')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'fire_axe')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'fire_axe')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'fire_extinguisher')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'fire_extinguisher')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'boomerang')->first()->id,
                'point' => 9,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'boomerang')->first()->id,
                'point' => 9,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'boomerang')->first()->id,
                'point' => 9,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'boomerang')->first()->id,
                'point' => 9,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'cz_m75')->first()->id,
                'point' => 25,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'cz_m75')->first()->id,
                'point' => 25,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'cz_m75')->first()->id,
                'point' => 25,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'cz_m75')->first()->id,
                'point' => 25,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'uzi_9mm')->first()->id,
                'point' => 30,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'uzi_9mm')->first()->id,
                'point' => 30,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'uzi_9mm')->first()->id,
                'point' => 30,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'E-4')->first()->id,
                'item_id' => Item::where('name', 'uzi_9mm')->first()->id,
                'point' => 30,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'pencil')->first()->id,
                'point' => 2,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'pencil')->first()->id,
                'point' => 2,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'pencil')->first()->id,
                'point' => 2,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'pencil')->first()->id,
                'point' => 2,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'pencil')->first()->id,
                'point' => 2,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'pencil')->first()->id,
                'point' => 2,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'pencil')->first()->id,
                'point' => 2,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'eraser')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'eraser')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'eraser')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'eraser')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'eraser')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'eraser')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'glass_flask')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'glass_flask')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'glass_flask')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'glass_flask')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'mop')->first()->id,
                'point' => 8,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'mop')->first()->id,
                'point' => 8,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'mop')->first()->id,
                'point' => 8,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'pill')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'blackboard_eraser')->first()->id,
                'point' => 2,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'blackboard_eraser')->first()->id,
                'point' => 2,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'blackboard_eraser')->first()->id,
                'point' => 2,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'blackboard_eraser')->first()->id,
                'point' => 2,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'blackboard_eraser')->first()->id,
                'point' => 2,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'white_chalk')->first()->id,
                'point' => 2,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'red_chalk')->first()->id,
                'point' => 2,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'yellow_chalk')->first()->id,
                'point' => 2,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'blue_chalk')->first()->id,
                'point' => 2,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'human_body_model')->first()->id,
                'point' => 3,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'giant_set_square')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'giant_compasses')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'chair')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'loud_speaker')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'fire_extinguisher')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'duty_student_armband')->first()->id,
                'point' => 3,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'duty_student_armband')->first()->id,
                'point' => 3,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'duty_student_armband')->first()->id,
                'point' => 3,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'duty_student_armband')->first()->id,
                'point' => 3,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'cuffs')->first()->id,
                'point' => 2,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'cuffs')->first()->id,
                'point' => 2,
                'endurance' => 20
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'fur_cuffs')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'indoor_shoes')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'indoor_shoes')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'G-3')->first()->id,
                'item_id' => Item::where('name', 'indoor_shoes')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'H-6')->first()->id,
                'item_id' => Item::where('name', 'fertilizer')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'cup')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'sewing_tools')->first()->id,
                'point' => 3,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'sewing_tools')->first()->id,
                'point' => 5,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'sewing_tools')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'glass_plate')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'television')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'dining_table')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'shelf')->first()->id,
                'point' => 15,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'precious_sword')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'empty_bottle')->first()->id,
                'point' => 1,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'empty_bottle')->first()->id,
                'point' => 1,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'empty_bottle')->first()->id,
                'point' => 1,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'empty_bottle')->first()->id,
                'point' => 1,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'empty_bottle')->first()->id,
                'point' => 1,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'empty_bottle')->first()->id,
                'point' => 1,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'empty_bottle')->first()->id,
                'point' => 1,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'empty_bottle')->first()->id,
                'point' => 1,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'empty_bottle')->first()->id,
                'point' => 1,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'empty_bottle')->first()->id,
                'point' => 1,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'empty_bottle')->first()->id,
                'point' => 1,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'empty_bottle')->first()->id,
                'point' => 1,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'empty_can')->first()->id,
                'point' => 2,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'empty_can')->first()->id,
                'point' => 2,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'empty_can')->first()->id,
                'point' => 2,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'empty_can')->first()->id,
                'point' => 2,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'empty_can')->first()->id,
                'point' => 2,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'empty_can')->first()->id,
                'point' => 2,
                'endurance' => 10
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'glass_goblet')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'pot')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'chains')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'chains')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'frying_pan')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'frying_pan')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'gasoline')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'gasoline')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'gasoline')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'gasoline')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'disel')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'disel')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'disel')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'disel')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'bracelet')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'bracelet')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'bracelet')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => Location::where('code', 'B-4')->first()->id,
                'item_id' => Item::where('name', 'fur_cuffs')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'mousetrap')->first()->id,
                'point' => 10,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'mine')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'piano_wire')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'hiking_boots')->first()->id,
                'point' => 3,
                'endurance' => 5,
            ],
            [
                'location_id' => Location::where('code', 'J-6')->first()->id,
                'item_id' => Item::where('name', 'hiking_helmet')->first()->id,
                'point' => 2,
                'endurance' => 3,
            ],
            // global
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '12gauge_shell')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '9mm_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '22lr_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '357mag_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '38sp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', '45acp_ammo')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'musket_ball')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'water')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'firelock')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'masamune_great_sword')->first()->id,
                'point' => 23,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'muramasa_magical_sword')->first()->id,
                'point' => 23,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'japanese_bow')->first()->id,
                'point' => 18,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'precious_sword')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'armor')->first()->id,
                'point' => 12,
                'endurance' => 20
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'chainmail_armor')->first()->id,
                'point' => 12,
                'endurance' => 20
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'combat_helmet')->first()->id,
                'point' => 5,
                'endurance' => 10
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'precious_armor')->first()->id,
                'point' => 14,
                'endurance' => 20
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'rubber_shoes')->first()->id,
                'point' => 2,
                'endurance' => 4
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'rubber_shoes')->first()->id,
                'point' => 2,
                'endurance' => 4
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'rubber_shoes')->first()->id,
                'point' => 2,
                'endurance' => 4
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'rubber_shoes')->first()->id,
                'point' => 2,
                'endurance' => 4
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'rubber_shoes')->first()->id,
                'point' => 2,
                'endurance' => 4
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'rainboots')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'rainboots')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'high_heel')->first()->id,
                'point' => 3,
                'endurance' => 3
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'high_heel')->first()->id,
                'point' => 3,
                'endurance' => 3
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'high_heel')->first()->id,
                'point' => 3,
                'endurance' => 3
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'military_boots')->first()->id,
                'point' => 3,
                'endurance' => 3
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'ribbon')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'ribbon')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'rusty_helmet')->first()->id,
                'point' => 4,
                'endurance' => 3
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'military_helmet')->first()->id,
                'point' => 5,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'drill_surgent_armband')->first()->id,
                'point' => 5,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'mp_armband')->first()->id,
                'point' => 5,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'military_uniform')->first()->id,
                'point' => 10,
                'endurance' => 40
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'radar')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'soldering_iron')->first()->id,
                'point' => 6,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'broken_laptop')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'whetstone')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'kitchen_knife')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'grenade')->first()->id,
                'point' => 40,
                'endurance' => 2
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'shuriken')->first()->id,
                'point' => 30,
                'endurance' => 15
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'shuriken')->first()->id,
                'point' => 30,
                'endurance' => 15
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'shuriken')->first()->id,
                'point' => 30,
                'endurance' => 15
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'shuriken')->first()->id,
                'point' => 30,
                'endurance' => 15
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'shuriken')->first()->id,
                'point' => 30,
                'endurance' => 15
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'shuriken')->first()->id,
                'point' => 30,
                'endurance' => 15
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'shuriken')->first()->id,
                'point' => 30,
                'endurance' => 15
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'baseball_balls')->first()->id,
                'point' => 20,
                'endurance' => 30
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'stones')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'heavy_crossbow')->first()->id,
                'point' => 30,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'heavy_crossbow')->first()->id,
                'point' => 30,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'heavy_crossbow')->first()->id,
                'point' => 30,
                'endurance' => 0
            ],
            [
                'location_id' => 0,
                'item_id' => Item::where('name', 'heavy_crossbow')->first()->id,
                'point' => 30,
                'endurance' => 0
            ],
        ];

        foreach ($items as $item) {
            DB::table('item_lootings')->insert($item);
        }
    }
}
