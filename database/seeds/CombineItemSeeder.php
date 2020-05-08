<?php

use Illuminate\Database\Seeder;
use App\GameItem;

class CombineItemSeeder extends Seeder
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
                'base_id' => GameItem::where('name', '경유')->first()->id,
                'combine_id' => GameItem::where('name', '비료')->first()->id,
                'result_id' => GameItem::where('name', '화약')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '비료')->first()->id,                
                'combine_id' => GameItem::where('name', '경유')->first()->id,
                'result_id' => GameItem::where('name', '화약')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '휘발유')->first()->id,                
                'combine_id' => GameItem::where('name', '빈병')->first()->id,
                'result_id' => GameItem::where('name', '화염병')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '빈병')->first()->id,                
                'combine_id' => GameItem::where('name', '휘발유')->first()->id,
                'result_id' => GameItem::where('name', '화염병')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '뇌관')->first()->id,                
                'combine_id' => GameItem::where('name', '화약')->first()->id,
                'result_id' => GameItem::where('name', '폭탄')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '화약')->first()->id,                
                'combine_id' => GameItem::where('name', '뇌관')->first()->id,
                'result_id' => GameItem::where('name', '폭탄')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '화약')->first()->id,                
                'combine_id' => GameItem::where('name', '도화선')->first()->id,
                'result_id' => GameItem::where('name', '다이나마이트')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '도화선')->first()->id,                
                'combine_id' => GameItem::where('name', '화약')->first()->id,
                'result_id' => GameItem::where('name', '다이나마이트')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '화약')->first()->id,                
                'combine_id' => GameItem::where('name', '지뢰')->first()->id,
                'result_id' => GameItem::where('name', '강화지뢰')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '지뢰')->first()->id,                
                'combine_id' => GameItem::where('name', '화약')->first()->id,
                'result_id' => GameItem::where('name', '강화지뢰')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '헤어스프레이')->first()->id,                
                'combine_id' => GameItem::where('name', '라이터')->first()->id,
                'result_id' => GameItem::where('name', '간이화염방사기')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '라이터')->first()->id,                
                'combine_id' => GameItem::where('name', '헤어스프레이')->first()->id,
                'result_id' => GameItem::where('name', '간이화염방사기')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '쇠사슬')->first()->id,                
                'combine_id' => GameItem::where('name', '낫')->first()->id,
                'result_id' => GameItem::where('name', '사슬낫')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '낫')->first()->id,                
                'combine_id' => GameItem::where('name', '쇠사슬')->first()->id,
                'result_id' => GameItem::where('name', '사슬낫')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '배트')->first()->id,                
                'combine_id' => GameItem::where('name', '못')->first()->id,
                'result_id' => GameItem::where('name', '못박은배트')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '못')->first()->id,                
                'combine_id' => GameItem::where('name', '배트')->first()->id,
                'result_id' => GameItem::where('name', '못박은배트')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '대나무')->first()->id,                
                'combine_id' => GameItem::where('name', '못')->first()->id,
                'result_id' => GameItem::where('name', '못박은대나무')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '못')->first()->id,                
                'combine_id' => GameItem::where('name', '대나무')->first()->id,
                'result_id' => GameItem::where('name', '못박은대나무')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '암석')->first()->id,                
                'combine_id' => GameItem::where('name', '대나무')->first()->id,
                'result_id' => GameItem::where('name', '돌도끼')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '대나무')->first()->id,                
                'combine_id' => GameItem::where('name', '암석')->first()->id,
                'result_id' => GameItem::where('name', '돌도끼')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '숫돌')->first()->id,                
                'combine_id' => GameItem::where('name', '나이프')->first()->id,
                'result_id' => GameItem::where('name', '커스텀나이프')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '나이프')->first()->id,                
                'combine_id' => GameItem::where('name', '숫돌')->first()->id,
                'result_id' => GameItem::where('name', '커스텀나이프')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '석궁')->first()->id,                
                'combine_id' => GameItem::where('name', '피아노선')->first()->id,
                'result_id' => GameItem::where('name', '쇠뇌')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '피아노선')->first()->id,                
                'combine_id' => GameItem::where('name', '석궁')->first()->id,
                'result_id' => GameItem::where('name', '쇠뇌')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '대나무')->first()->id,                
                'combine_id' => GameItem::where('name', '나이프')->first()->id,
                'result_id' => GameItem::where('name', '죽창')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '나이프')->first()->id,                
                'combine_id' => GameItem::where('name', '대나무')->first()->id,
                'result_id' => GameItem::where('name', '죽창')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '노트북')->first()->id,                
                'combine_id' => GameItem::where('name', '간이레이더')->first()->id,
                'result_id' => GameItem::where('name', '레이더')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '간이레이더')->first()->id,                
                'combine_id' => GameItem::where('name', '노트북')->first()->id,
                'result_id' => GameItem::where('name', '레이더')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '휴대용게임기')->first()->id,                
                'combine_id' => GameItem::where('name', '간이레이더')->first()->id,
                'result_id' => GameItem::where('name', '레이더')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '간이레이더')->first()->id,                
                'combine_id' => GameItem::where('name', '휴대용게임기')->first()->id,
                'result_id' => GameItem::where('name', '레이더')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '전기인두')->first()->id,                
                'combine_id' => GameItem::where('name', '고장난노트북')->first()->id,
                'result_id' => GameItem::where('name', '노트북')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '고장난노트북')->first()->id,                
                'combine_id' => GameItem::where('name', '전기인두')->first()->id,
                'result_id' => GameItem::where('name', '노트북')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '휴대폰')->first()->id,                
                'combine_id' => GameItem::where('name', '노트북')->first()->id,
                'result_id' => GameItem::where('name', '모바일PC')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '노트북')->first()->id,                
                'combine_id' => GameItem::where('name', '휴대폰')->first()->id,
                'result_id' => GameItem::where('name', '모바일PC')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '보검')->first()->id,                
                'combine_id' => GameItem::where('name', '창대')->first()->id,
                'result_id' => GameItem::where('name', '언월도')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '창대')->first()->id,                
                'combine_id' => GameItem::where('name', '보검')->first()->id,
                'result_id' => GameItem::where('name', '언월도')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '식칼')->first()->id,                
                'combine_id' => GameItem::where('name', '식칼')->first()->id,
                'result_id' => GameItem::where('name', '쌍칼')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '대나무')->first()->id,                
                'combine_id' => GameItem::where('name', '피아노선')->first()->id,
                'result_id' => GameItem::where('name', '창대')->first()->id
            ],
            [
                'base_id' => GameItem::where('name', '피아노선')->first()->id,                
                'combine_id' => GameItem::where('name', '대나무')->first()->id,
                'result_id' => GameItem::where('name', '창대')->first()->id
            ],            
        ];

        foreach ($items as $item) {
            DB::table('game_item_combines')->insert($item);
        }
    }
}
