<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                'name' => '선생님',
                'email' => 'teacher@localhost',
                'password' => ''
            ],
            [
                'name' => '병사',
                'email' => 'soldier@localhost',
                'password' => ''
            ],
        ];

        foreach ($items as $item) {
            DB::table('users')->insert($item);
        }
    }
}
