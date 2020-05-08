<?php

use Illuminate\Database\Seeder;
use App\GameItem;
use App\GameLocation;

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
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '식칼')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '컵')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '분말쥬스')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '분말쥬스')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '분말쥬스')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '분말쥬스')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '분말쥬스')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '분말쥬스')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '분말쥬스')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '분말쥬스')->first()->id,
                'point' => 30,
                'endurance' => 1
            ],
        ];

        foreach ($items as $item) {
            DB::table('game_item_lootings')->insert($item);
        }
    }
}
