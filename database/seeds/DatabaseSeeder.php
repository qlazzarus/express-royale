<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ClubSeeder::class,
            LocationSeeder::class,
            ItemSeeder::class,
            CombineItemSeeder::class,
            SupplyItemSeeder::class,
            LootingSeeder::class,            
        ]);
    }
}
