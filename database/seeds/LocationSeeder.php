<?php

use Illuminate\Database\Seeder;
use App\Enums\LocationSpecialize;

class LocationSeeder extends Seeder
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
                'name' => '분교',
                'code' => 'D-6',
                'message' => "분교다. 곧 여기는 금지지역이 되겠구나.\n빨리 이동하지 않으면, 목걸이가 폭발하고 만다...",
                'specialize' => LocationSpecialize::FindPlus,
                'is_restrict' => true,
                'is_next_restrict' => false
            ],
            [
                'name' => '북쪽갑',
                'code' => 'A-2',
                'message' => "바다에는 배가 보인다. 탈출하려는 학생들을 감시하고 있는 정부의 배인가...",
                'specialize' => LocationSpecialize::DefenceMinus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => '북쪽 주택가',
                'code' => 'B-4',
                'message' => "전에는 여기에서도 사람이 살고 있었겠지. 지금은 폐허로 변했구나.",
                'specialize' => LocationSpecialize::DefencePlus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => '면사무소',
                'code' => 'C-3',
                'message' => "여기가 마을의 중심인가. 지금으로서는 아무도 없는가...",
                'specialize' => LocationSpecialize::FindPlus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => '우체국',
                'code' => 'C-4',
                'message' => "여기서는, 눈에 띄는 것이 없는데...",
                'specialize' => LocationSpecialize::FindMinus,
                'is_restrict' => false,
                'is_next_restrict' => true
            ],
            [
                'name' => '소방서',
                'code' => 'C-5',
                'message' => "소방서라곤 해도, 소방차조차 없구나.",
                'specialize' => LocationSpecialize::FindPlus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => '관음당',
                'code' => 'C-6',
                'message' => "크고 작은 여러가지 불상이 모셔져 있구나. 밤에는 으시시하겠네.",
                'specialize' => LocationSpecialize::AttackPlus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => '시미즈 연못',
                'code' => 'D-4',
                'message' => "맑은 물이 가득 차 있구나.",
                'specialize' => LocationSpecialize::FindPlus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => '서쪽 신사',
                'code' => 'E-2',
                'message' => "학문의 신들이 모셔져 있는거구나, 틀림없어.",
                'specialize' => LocationSpecialize::FindMinus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => '호텔 자리',
                'code' => 'E-4',
                'message' => "이런 장소는 유령이 자주 나올까? 유령같은건 믿지 않지만.",
                'specialize' => LocationSpecialize::AttackMinus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => '터널',
                'code' => 'E-7',
                'message' => "깜깜하구나. 이런 곳에서 협공당하면 국물도 없겠군.",
                'specialize' => LocationSpecialize::DefenceMinus,
                'is_restrict' => false,
                'is_next_restrict' => true
            ],
            [
                'name' => '서쪽 주택가',
                'code' => 'F-2',
                'message' => "여기도, 다른 주택가와 같이, 모두 폐허로 변했구나...",
                'specialize' => LocationSpecialize::DefencePlus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => '산악지대',
                'code' => 'F-5',
                'message' => "이 섬을 한눈에 볼 수 있는 고지대다. 당연히 이곳에 서 있으면, 다른 곳에서도 날 발견할 가능성이 높을 것이다.",
                'specialize' => LocationSpecialize::FindPlus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => '절',
                'code' => 'F-8',
                'message' => "모두 아주 황폐해져 있구나.",
                'specialize' => LocationSpecialize::FindMinus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => '학교',
                'code' => 'G-3',
                'message' => "낮동안의 학교라는 건 좋은 것이지만, 밤의 학교라는 것은 좋은 것이 아니군.",
                'specialize' => LocationSpecialize::AttackMinus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => '남쪽 신사',
                'code' => 'G-6',
                'message' => "새집도 썩어서 형편없는 모습을 드러내고 있구나.",
                'specialize' => LocationSpecialize::FindMinus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => '삼림지대',
                'code' => 'H-4',
                'message' => "나무들이 울창하게 자라 있구나. 풀숲에서 갑자기 습격하더라도 알아채지 못할거야...",
                'specialize' => LocationSpecialize::FindMinus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => '겐지로 연못',
                'code' => 'H-6',
                'message' => "여기는 연못이라기보다도, 웅덩이구나. 정말 기분 나쁜 곳이야...",
                'specialize' => LocationSpecialize::FindMinus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => '남쪽 주택가',
                'code' => 'I-6',
                'message' => "여기는, 다른 주택가보다, 가게가 많구나. 상점가인가 뭔가였겠지.",
                'specialize' => LocationSpecialize::AttackPlus,
                'is_restrict' => false,
                'is_next_restrict' => true
            ],
            [
                'name' => '요양소',
                'code' => 'I-7',
                'message' => "황폐해져 있지만, 찾아보면 아직 사용할 수 있는 약 같은 것이 있을 것 같다...",
                'specialize' => LocationSpecialize::FindPlus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => '등대',
                'code' => 'I-10',
                'message' => "요새로서 점거하면, 견고한 오새가 될듯한데. 바닥에는 말라붙은 혈흔이 많이 있구나. 무슨 일이 있었던거지?",
                'specialize' => LocationSpecialize::DefencePlus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => '남쪽갑',
                'code' => 'J-6',
                'message' => "병사의 배와... 우승자가 탈 배인가? 몇척의 배가 떠 있다.",
                'specialize' => LocationSpecialize::FindPlus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
        ];

        foreach ($items as $item) {
            DB::table('game_locations')->insert($item);
        }
    }
}
