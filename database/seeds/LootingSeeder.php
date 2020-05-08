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
                'item_id' => GameItem::where('name', '컵')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '컵')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '컵')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '컵')->first()->id,
                'point' => 10,
                'endurance' => 4
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
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '접시')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '접시')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '접시')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '냄비')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '냄비')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '냄비')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '냄비')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '냄비')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '유리잔')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '유리잔')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '유리잔')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '유리잔')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '유리잔')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '텔레비전')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '테이블')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '선반')->first()->id,
                'point' => 15,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '식칼')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '식칼')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '식칼')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '식칼')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '숫돌')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '숫돌')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '숫돌')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '숫돌')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '숫돌')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '숫돌')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '숫돌')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '숫돌')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '숫돌')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '숫돌')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '쇠사슬')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '쇠사슬')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '후라이팬')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '후라이팬')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '휘발유')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '휘발유')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '휘발유')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '휘발유')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '경유')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '경유')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '경유')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '경유')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '팔찌')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '팔찌')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => GameLocation::where('code', 'I-6')->first()->id,
                'item_id' => GameItem::where('name', '팔찌')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '피아노선')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '피아노선')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '피아노선')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '피아노선')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '피아노선')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '피아노선')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '피아노선')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '피아노선')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '피아노선')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '피아노선')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '피아노선')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '피아노선')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '피아노선')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '피아노선')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '피아노선')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '피아노선')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '머리띠')->first()->id,
                'point' => 1,
                'endurance' => 3
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '머리띠')->first()->id,
                'point' => 1,
                'endurance' => 3
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '머리띠')->first()->id,
                'point' => 1,
                'endurance' => 3
            ],
            [
                'location_id' => GameLocation::where('code', 'C-4')->first()->id,
                'item_id' => GameItem::where('name', '머리띠')->first()->id,
                'point' => 1,
                'endurance' => 3
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '못')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '못')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '못')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '못')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '못')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '못')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '못')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '못')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '못')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '못')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '못')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '못')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '도화선')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '도화선')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '도화선')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '도화선')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '도화선')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '도화선')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '작업용헬멧')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '작업용헬멧')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '작업복')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '작업복')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '작업복')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '오토바이헬멧')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => GameLocation::where('code', 'E-7')->first()->id,
                'item_id' => GameItem::where('name', '오토바이헬멧')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '낫')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '낫')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '목검')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '목검')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '목검')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '목검')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '목검')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '목검')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '목검')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '목검')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '목검')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '목검')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '대나무')->first()->id,
                'point' => 6,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '대나무')->first()->id,
                'point' => 6,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '대나무')->first()->id,
                'point' => 6,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '대나무')->first()->id,
                'point' => 6,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '등산모')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '등산모')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '녹슨철모')->first()->id,
                'point' => 4,
                'endurance' => 3
            ],
            [
                'location_id' => GameLocation::where('code', 'H-4')->first()->id,
                'item_id' => GameItem::where('name', '녹슨철모')->first()->id,
                'point' => 4,
                'endurance' => 3
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (샷건)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (샷건)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (샷건)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (샷건)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (샷건)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (9mm)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (9mm)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (9mm)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (9mm)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (9mm)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (22LR)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (22LR)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (22LR)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (22LR)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (22LR)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (매그넘)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (매그넘)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (매그넘)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (매그넘)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (매그넘)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (.38SP)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (.38SP)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (.38SP)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (.38SP)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (.38SP)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (.45ACP)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (.45ACP)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (.45ACP)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (.45ACP)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (.45ACP)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (화승총)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (화승총)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (화승총)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (화승총)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (화승총)')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '곡괭이')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '곡괭이')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '스카프')->first()->id,
                'point' => 10,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '샤벨')->first()->id,
                'point' => 5,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '샤벨')->first()->id,
                'point' => 5,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '샤벨')->first()->id,
                'point' => 5,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '암석')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '암석')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '암석')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '암석')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '암석')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '암석')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '암석')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '암석')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '암석')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '암석')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '암석')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '암석')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '암석')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '암석')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '암석')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '암석')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '암석')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '암석')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '암석')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '암석')->first()->id,
                'point' => 8,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '도화선')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '도화선')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '도화선')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '도화선')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '도화선')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '도화선')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '작업용헬멧')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '작업용헬멧')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '작업복')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '작업복')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '작업복')->first()->id,
                'point' => 8,
                'endurance' => 10
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '등산화')->first()->id,
                'point' => 3,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '등산화')->first()->id,
                'point' => 3,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '등산모')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => GameLocation::where('code', 'F-5')->first()->id,
                'item_id' => GameItem::where('name', '등산모')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => GameLocation::where('code', 'C-6')->first()->id,
                'item_id' => GameItem::where('name', '관음보살상')->first()->id,
                'point' => 5,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'C-6')->first()->id,
                'item_id' => GameItem::where('name', '염라대왕상')->first()->id,
                'point' => 7,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'C-6')->first()->id,
                'item_id' => GameItem::where('name', '아수라상')->first()->id,
                'point' => 10,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'C-6')->first()->id,
                'item_id' => GameItem::where('name', '지장보살상')->first()->id,
                'point' => 8,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'C-6')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-6')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-6')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-6')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'C-6')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'C-6')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'C-6')->first()->id,
                'item_id' => GameItem::where('name', '승복')->first()->id,
                'point' => 8,
                'endurance' => 20,
            ],
            [
                'location_id' => GameLocation::where('code', 'C-6')->first()->id,
                'item_id' => GameItem::where('name', '승복')->first()->id,
                'point' => 8,
                'endurance' => 20,
            ],
            [
                'location_id' => GameLocation::where('code', 'C-6')->first()->id,
                'item_id' => GameItem::where('name', '승복')->first()->id,
                'point' => 8,
                'endurance' => 20,
            ],
            [
                'location_id' => GameLocation::where('code', 'C-6')->first()->id,
                'item_id' => GameItem::where('name', '승복')->first()->id,
                'point' => 8,
                'endurance' => 20,
            ],
            [
                'location_id' => GameLocation::where('code', 'C-6')->first()->id,
                'item_id' => GameItem::where('name', '신관의옷')->first()->id,
                'point' => 8,
                'endurance' => 15,
            ],
            [
                'location_id' => GameLocation::where('code', 'C-6')->first()->id,
                'item_id' => GameItem::where('name', '신관의옷')->first()->id,
                'point' => 8,
                'endurance' => 15,
            ],
            [
                'location_id' => GameLocation::where('code', 'C-6')->first()->id,
                'item_id' => GameItem::where('name', '신관의옷')->first()->id,
                'point' => 8,
                'endurance' => 15,
            ],
            [
                'location_id' => GameLocation::where('code', 'C-6')->first()->id,
                'item_id' => GameItem::where('name', '신관의옷')->first()->id,
                'point' => 8,
                'endurance' => 15,
            ],
            [
                'location_id' => GameLocation::where('code', 'C-6')->first()->id,
                'item_id' => GameItem::where('name', '신관의옷')->first()->id,
                'point' => 8,
                'endurance' => 15,
            ],
            [
                'location_id' => GameLocation::where('code', 'C-6')->first()->id,
                'item_id' => GameItem::where('name', '신관의옷')->first()->id,
                'point' => 8,
                'endurance' => 15,
            ],
            [
                'location_id' => GameLocation::where('code', 'C-6')->first()->id,
                'item_id' => GameItem::where('name', '나막신')->first()->id,
                'point' => 2,
                'endurance' => 5,
            ],
            [
                'location_id' => GameLocation::where('code', 'C-6')->first()->id,
                'item_id' => GameItem::where('name', '나막신')->first()->id,
                'point' => 2,
                'endurance' => 5,
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '양궁')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '양궁')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '양궁')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '양궁')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '양궁')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '양궁')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '양궁')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '양궁')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '나막신')->first()->id,
                'point' => 2,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-2')->first()->id,
                'item_id' => GameItem::where('name', '나막신')->first()->id,
                'point' => 2,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '비료')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '비료')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '비료')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '비료')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '비료')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '비료')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '비료')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '비료')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '비료')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '비료')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '비료')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '비료')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '피아노선')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '피아노선')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '피아노선')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '피아노선')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '피아노선')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '피아노선')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '피아노선')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '피아노선')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '피아노선')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '피아노선')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '피아노선')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '피아노선')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '확성기')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '민방위완장')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '민방위완장')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '민방위완장')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '새마을완장')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '새마을완장')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '새마을완장')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '새마을완장')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => GameLocation::where('code', 'C-3')->first()->id,
                'item_id' => GameItem::where('name', '새마을완장')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => -50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '스튜')->first()->id,
                'point' => 50,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '낫')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '낫')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '소화기')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '소화기')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '장화')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'I-10')->first()->id,
                'item_id' => GameItem::where('name', '장화')->first()->id,
                'point' => 4,
                'endurance' => 5
            ],
        ];

        foreach ($items as $item) {
            DB::table('game_item_lootings')->insert($item);
        }
    }
}
