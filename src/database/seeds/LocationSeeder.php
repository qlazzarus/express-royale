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
                'name' => 'location.branch_school',
                'code' => 'D-6',
                'message' => 'location_message.branch_school',
                'specialize' => LocationSpecialize::FindPlus,
                'is_restrict' => true,
                'is_next_restrict' => false
            ],
            [
                'name' => 'location.northend',
                'code' => 'A-2',
                'message' => 'location_message.northend',
                'specialize' => LocationSpecialize::DefenceMinus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => 'location.north_village',
                'code' => 'B-4',
                'message' => 'location_message.north_village',
                'specialize' => LocationSpecialize::DefencePlus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => 'location.town_office',
                'code' => 'C-3',
                'message' => 'location_message.town_office',
                'specialize' => LocationSpecialize::FindPlus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => 'location.post_office',
                'code' => 'C-4',
                'message' => 'location_message.post_office',
                'specialize' => LocationSpecialize::FindMinus,
                'is_restrict' => false,
                'is_next_restrict' => true
            ],
            [
                'name' => 'location.fire_station',
                'code' => 'C-5',
                'message' => 'location_message.fire_station',
                'specialize' => LocationSpecialize::FindPlus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => 'location.quan_yin_temple',
                'code' => 'C-6',
                'message' => 'location_message.quan_yin_temple',
                'specialize' => LocationSpecialize::AttackPlus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => 'location.clean_lake',
                'code' => 'D-4',
                'message' => 'location_message.clean_lake',
                'specialize' => LocationSpecialize::FindPlus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => 'location.west_temple',
                'code' => 'E-2',
                'message' => 'location_message.west_temple',
                'specialize' => LocationSpecialize::FindMinus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => 'location.hotel_places',
                'code' => 'E-4',
                'message' => 'location_message.hotel_places',
                'specialize' => LocationSpecialize::AttackMinus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => 'location.tunnel',
                'code' => 'E-7',
                'message' => 'location_message.tunnel',
                'specialize' => LocationSpecialize::DefenceMinus,
                'is_restrict' => false,
                'is_next_restrict' => true
            ],
            [
                'name' => 'location.west_village',
                'code' => 'F-2',
                'message' => 'location_message.west_village',
                'specialize' => LocationSpecialize::DefencePlus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => 'location.mountaneous',
                'code' => 'F-5',
                'message' => 'location_message.mountaneous',
                'specialize' => LocationSpecialize::FindPlus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => 'location.temple',
                'code' => 'F-8',
                'message' => 'location_message.temple',
                'specialize' => LocationSpecialize::FindMinus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => 'location.school',
                'code' => 'G-3',
                'message' => 'location_message.school',
                'specialize' => LocationSpecialize::AttackMinus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => 'location.south_temple',
                'code' => 'G-6',
                'message' => 'location_message.south_temple',
                'specialize' => LocationSpecialize::FindMinus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => 'location.forest',
                'code' => 'H-4',
                'message' => 'location_message.forest',
                'specialize' => LocationSpecialize::FindMinus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => 'location.genjiro_lake',
                'code' => 'H-6',
                'message' => 'location_message.genjiro_lake',
                'specialize' => LocationSpecialize::FindMinus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => 'location.south_village',
                'code' => 'I-6',
                'message' => 'location_message.south_village',
                'specialize' => LocationSpecialize::AttackPlus,
                'is_restrict' => false,
                'is_next_restrict' => true
            ],
            [
                'name' => 'location.sanitarium',
                'code' => 'I-7',
                'message' => 'location_message.sanitarium',
                'specialize' => LocationSpecialize::FindPlus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => 'location.lighthouse',
                'code' => 'I-10',
                'message' => 'location_message.lighthouse',
                'specialize' => LocationSpecialize::DefencePlus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
            [
                'name' => 'location.southend',
                'code' => 'J-6',
                'message' => 'location_message.southend',
                'specialize' => LocationSpecialize::FindPlus,
                'is_restrict' => false,
                'is_next_restrict' => false
            ],
        ];

        foreach ($items as $item) {
            DB::table('locations')->insert($item);
        }
    }
}
