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
                'name' => 'club.archery',
                'skill_shot_multiplier' => 0.5,
                'skill_bow_multiplier' => 2,
            ],
            [
                'name' => 'club.shooting',
                'skill_shot_multiplier' => 2,
                'skill_bow_multiplier' => 0.5,
            ],
            [
                'name' => 'club.kendo',
                'skill_cut_multiplier' => 2,
                'skill_stab_multiplier' => 0.5,
                'skill_melee_multiplier' => 0.25
            ],
            [
                'name' => 'club.fencing',
                'skill_stab_multiplier' => 2
            ],
            [
                'name' => 'club.karate',
                'skill_melee_multiplier' => 2
            ],
            [
                'name' => 'club.boxing',
                'skill_melee_multiplier' => 2
            ],
            [
                'name' => 'club.basketball',
                'skill_throw_multiplier' => 2,
                'skill_bomb_multiplier' => 0.25
            ],
            [
                'name' => 'club.volleyball',
                'skill_throw_multiplier' => 2,
                'skill_bomb_multiplier' => 0.25
            ],
            [
                'name' => 'club.baseball',
                'skill_melee_multiplier' => 2,
                'skill_throw_multiplier' => 0.5,
                'skill_bomb_multiplier' => 0.25
            ],
            [
                'name' => 'club.chemical',
                'skill_bomb_multiplier' => 2
            ],
            [
                'name' => 'club.athletic',
                'is_reduce_stamina' => true,
            ],
            [
                'name' => 'club.dramatic',
                'is_random_skill' => true,
            ],
            [
                'name' => 'club.computer',
                'is_hack_possible' => true,
            ],
            [
                'name' => 'club.cooking',
                'is_detect_poison' => true,
                'skill_cut_multiplier' => 0.5,
            ],
        ];

        foreach ($items as $item) {
            DB::table('clubs')->insert($item);
        }
    }
}
