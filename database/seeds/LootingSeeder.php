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
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '식칼')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '식칼')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '식칼')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '식칼')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '식칼')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '컵')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '컵')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '컵')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '컵')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '컵')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '접시')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '접시')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '접시')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '냄비')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '냄비')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '냄비')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '냄비')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '냄비')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '유리잔')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '유리잔')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '유리잔')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '유리잔')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '유리잔')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '텔레비전')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '테이블')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '바느질도구')->first()->id,
                'point' => 3,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '바느질도구')->first()->id,
                'point' => 3,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '바느질도구')->first()->id,
                'point' => 5,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '바느질도구')->first()->id,
                'point' => 5,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '바느질도구')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '바느질도구')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '선반')->first()->id,
                'point' => 15,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '빈병')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '빈병')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '빈병')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '빈병')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '빈병')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '빈캔')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '빈캔')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '빈캔')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '빈캔')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '빈캔')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '빈캔')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '빈캔')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '빈캔')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '빈캔')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '빈캔')->first()->id,
                'point' => 10,
                'endurance' => 2
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '카레가루')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '간장')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '소스')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '숫돌')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '숫돌')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '숫돌')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '숫돌')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '숫돌')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '숫돌')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '숫돌')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '숫돌')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '숫돌')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '숫돌')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '숫돌')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '숫돌')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '숫돌')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '숫돌')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '털토시')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '리본')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '리본')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '리본')->first()->id,
                'point' => 1,
                'endurance' => 2
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '운동화')->first()->id,
                'point' => 3,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-2')->first()->id,
                'item_id' => GameItem::where('name', '운동화')->first()->id,
                'point' => 3,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '약')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '영양드링크')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '영양드링크')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '영양드링크')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '영양드링크')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '영양드링크')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '영양드링크')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '영양드링크')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '영양드링크')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '영양드링크')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '영양드링크')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '영양드링크')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '영양드링크')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '영양드링크')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '영양드링크')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '영양드링크')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '영양드링크')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '영양드링크')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '영양드링크')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '영양드링크')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '영양드링크')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '영양드링크')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '영양드링크')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '영양드링크')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '영양드링크')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '영양드링크')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '영양드링크')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '영양드링크')->first()->id,
                'point' => 100,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '소화기')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '소화기')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '흰옷')->first()->id,
                'point' => 10,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '흰옷')->first()->id,
                'point' => 10,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'I-7')->first()->id,
                'item_id' => GameItem::where('name', '흰옷')->first()->id,
                'point' => 10,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '배터리')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '배터리')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '배터리')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '배터리')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '배터리')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '소방용도끼')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '소방용도끼')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '소화기')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '소화기')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '소화기')->first()->id,
                'point' => 12,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '방화복')->first()->id,
                'point' => 10,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '방화복')->first()->id,
                'point' => 10,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '방화복')->first()->id,
                'point' => 10,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '방화헬멧')->first()->id,
                'point' => 3,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'C-5')->first()->id,
                'item_id' => GameItem::where('name', '방화헬멧')->first()->id,
                'point' => 3,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'D-4')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '대나무')->first()->id,
                'point' => 6,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '대나무')->first()->id,
                'point' => 6,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '대나무')->first()->id,
                'point' => 6,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '대나무')->first()->id,
                'point' => 6,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '화살')->first()->id,
                'point' => 1,
                'endurance' => 24
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '양궁')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '양궁')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '양궁')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '양궁')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '양궁')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '양궁')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '양궁')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '양궁')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '양궁')->first()->id,
                'point' => 0,
                'endurance' => 20
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '나막신')->first()->id,
                'point' => 2,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '나막신')->first()->id,
                'point' => 2,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'G-6')->first()->id,
                'item_id' => GameItem::where('name', '나막신')->first()->id,
                'point' => 2,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '목탁')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '솔도파')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '솔도파')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '솔도파')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '솔도파')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '솔도파')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '솔도파')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '솔도파')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '솔도파')->first()->id,
                'point' => 4,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '머리띠')->first()->id,
                'point' => 1,
                'endurance' => 3
            ],
            [
                'location_id' => GameLocation::where('code', 'F-8')->first()->id,
                'item_id' => GameItem::where('name', '머리띠')->first()->id,
                'point' => 1,
                'endurance' => 3
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '쥐덫')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '쥐덫')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '쥐덫')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '쥐덫')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '쥐덫')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '쥐덫')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '쥐덫')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '쥐덫')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '쥐덫')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '쥐덫')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '쥐덫')->first()->id,
                'point' => 10,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '다이나마이트')->first()->id,
                'point' => 30,
                'endurance' => 8
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (샷건)')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (샷건)')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (9mm)')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (9mm)')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (22LR)')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (22LR)')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (매그넘)')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (매그넘)')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (.38SP)')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (.38SP)')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (.45ACP)')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (.45ACP)')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (화승총)')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '탄환 (화승총)')->first()->id,
                'point' => 24,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '물')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '지뢰')->first()->id,
                'point' => 8,
                'endurance' => 1,
                'is_trap_activated' => true
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '등산화')->first()->id,
                'point' => 3,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'A-2')->first()->id,
                'item_id' => GameItem::where('name', '등산모')->first()->id,
                'point' => 2,
                'endurance' => 3
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '돌멩이')->first()->id,
                'point' => 15,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '식칼')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '컵')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '컵')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '컵')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '컵')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '컵')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '컵')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '접시')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '접시')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '접시')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '냄비')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '냄비')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '냄비')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '냄비')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '냄비')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '유리잔')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '유리잔')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '유리잔')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '유리잔')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '유리잔')->first()->id,
                'point' => 10,
                'endurance' => 4
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '텔레비전')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '테이블')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '선반')->first()->id,
                'point' => 15,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '보검')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '비료')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '비료')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '비료')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '비료')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '비료')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '비료')->first()->id,
                'point' => 1,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '고구마')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '참마')->first()->id,
                'point' => 20,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '감자')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '우엉')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '당근')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '양파')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '마늘')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '생강')->first()->id,
                'point' => 40,
                'endurance' => 1
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '후라이팬')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '후라이팬')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '후라이팬')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '후라이팬')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '후라이팬')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '후라이팬')->first()->id,
                'point' => 15,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '소방용도끼')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '소방용도끼')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '소화기')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '소화기')->first()->id,
                'point' => 20,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '부메랑')->first()->id,
                'point' => 9,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '부메랑')->first()->id,
                'point' => 9,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '부메랑')->first()->id,
                'point' => 9,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '부메랑')->first()->id,
                'point' => 9,
                'endurance' => 5
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', 'CZ M75')->first()->id,
                'point' => 25,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', 'CZ M75')->first()->id,
                'point' => 25,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', 'CZ M75')->first()->id,
                'point' => 25,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', 'CZ M75')->first()->id,
                'point' => 25,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '우지 9mm 서브머신건')->first()->id,
                'point' => 30,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '우지 9mm 서브머신건')->first()->id,
                'point' => 30,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '우지 9mm 서브머신건')->first()->id,
                'point' => 30,
                'endurance' => 0
            ],
            [
                'location_id' => GameLocation::where('code', 'E-4')->first()->id,
                'item_id' => GameItem::where('name', '우지 9mm 서브머신건')->first()->id,
                'point' => 30,
                'endurance' => 0
            ],
        ];

        foreach ($items as $item) {
            DB::table('game_item_lootings')->insert($item);
        }
    }
}
