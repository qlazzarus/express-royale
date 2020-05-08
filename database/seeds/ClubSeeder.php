<?php

use Illuminate\Database\Seeder;

class ClubSeeder extends Seeder
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
                'name' => '궁도부',
                'skill_shot_multiplier' => 0.5,
                'skill_bow_multiplier' => 2,
            ],
            [
                'name' => '사격부',
                'skill_shot_multiplier' => 2,
                'skill_bow_multiplier' => 0.5,
            ],
            [
                'name' => '검도부',
                'skill_cut_multiplier' => 2,
                'skill_stab_multiplier' => 0.5,
                'skill_melee_multiplier' => 0.25
            ],
            [
                'name' => '펜싱부',
                'skill_stab_multiplier' => 2
            ],
            [
                'name' => '공수도부',
                'skill_melee_multiplier' => 2
            ],
            [
                'name' => '복싱부',
                'skill_melee_multiplier' => 2
            ],
            [
                'name' => '농구부',
                'skill_throw_multiplier' => 2,
                'skill_bomb_multiplier' => 0.25
            ],
            [
                'name' => '배구부',
                'skill_throw_multiplier' => 2,
                'skill_bomb_multiplier' => 0.25
            ],
            [
                'name' => '야구부',
                'skill_melee_multiplier' => 2,
                'skill_throw_multiplier' => 0.5,
                'skill_bomb_multiplier' => 0.25
            ],
            [
                'name' => '화학부',
                'skill_bomb_multiplier' => 2
            ],
            [
                'name' => '육상부',
                'is_reduce_stamina' => true,
            ],
            [
                'name' => '연극부',
                'is_random_skill' => true,
            ],
            [
                'name' => '컴퓨터부',
                'is_hack_possible' => true,
            ],
            [
                'name' => '요리부',
                'is_detect_poison' => true,
                'skill_cut_multiplier' => 0.5,
            ],
        ];

        foreach ($items as $item) {
            DB::table('game_clubs')->insert($item);
        }
    }
}
