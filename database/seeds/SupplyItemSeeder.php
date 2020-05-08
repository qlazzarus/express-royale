<?php

use Illuminate\Database\Seeder;

use App\Enums\SupplyType;
use App\GameItem;

class SupplyItemSeeder extends Seeder
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
                'type' => SupplyType::Personal,
                'item_id' => GameItem::where('name', '휴대폰')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => GameItem::where('name', '와일드세븐')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => GameItem::where('name', '초콜렛')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => GameItem::where('name', '위스키')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => GameItem::where('name', '쿠키')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => GameItem::where('name', '면도칼')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => GameItem::where('name', '버터플라이나이프')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => GameItem::where('name', '목걸이')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => GameItem::where('name', '뇌관')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => GameItem::where('name', '화투')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => GameItem::where('name', '트럼프카드')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => GameItem::where('name', '휴대용게임기')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => GameItem::where('name', '비누')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => GameItem::where('name', '칫솔')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => GameItem::where('name', '헤어스프레이')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => GameItem::where('name', '안경')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => GameItem::where('name', '라이터')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => GameItem::where('name', '잡지')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => GameItem::where('name', '다마고치')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => GameItem::where('name', 'CD플레이어')->first()->id
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '석궁')->first()->id
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '식칼')->first()->id
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '손도끼')->first()->id
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '방탄조끼')->first()->id
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '레밍턴M31RS')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '나이프')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '단도')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '잉그램M10 서브머신건')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '간이레이더')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '포크')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '금속 배트')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '22구경 2연발 데린져')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '군용 나이프')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '샤미센 줄')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '월터PPK 9밀리')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', 'S&W M19 357 매그넘')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '베레타M92F')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', 'S&W 치프스페셜 38구경')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '콜트357 매그넘 리볼버')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '양날 나이프')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '브라우닝 하이파워 9mm')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '다이버즈 나이프')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '다트')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '수류탄')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', 'S&W M59 오토')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '특수경봉')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '콜트 하이웨이 패트롤맨 38구경')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '낫')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '얼음송곳')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '눈쳐크')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '부메랑')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', 'CZ M75')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '우지 9mm 서브머신건')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '시그 사우엘 P230 9mm')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '콜트 거버먼트 45구경')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '일본도')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '부채')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '대야')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '슬리퍼')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '칠판지우개')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '분필')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '배트')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '너클')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '뿅망치')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => GameItem::where('name', '독약')->first()->id,
            ],
        ];

        foreach ($items as $item) {
            DB::table('game_item_supplies')->insert($item);
        }
    }
}
