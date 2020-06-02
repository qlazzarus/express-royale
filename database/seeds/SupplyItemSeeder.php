<?php

use Illuminate\Database\Seeder;

use App\Enums\SupplyType;
use App\Item;

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
                'item_id' => Item::where('name', 'phone')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('name', 'mild_seven_cigarettes')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('name', 'chocolate')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('name', 'whiskey')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('name', 'cookie')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('name', 'razor')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('name', 'butterfly_knife')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('name', 'necklace')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('name', 'primer')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('name', 'hanafuda')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('name', 'playing_cards')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('name', 'portable_console')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('name', 'soap')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('name', 'toothbrush')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('name', 'hair_spray')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('name', 'glasses')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('name', 'lighter')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('name', 'magazine')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('name', 'tamagotchi')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('name', 'cd_player')->first()->id
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'crossbow')->first()->id
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'kitchen_knife')->first()->id
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'hand_axe')->first()->id
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'bulletproof_vest')->first()->id
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'remington_mk31')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'knife')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'dagger')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'mac_10')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'temp_radar')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'fork')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'metal_bet')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'derringer')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'military_knife')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'shamisen_wire')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'walther_ppk')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'm19_magnum')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'beretta_m9')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'm36_revolver')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'python_magnum')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'dagger_knife')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'browning_hipower')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'divers_knife')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'dart')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'grenade')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'm59_pistol')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'baton')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'm28_38special')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'sickle')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'ice_pick')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'nunchaku')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'boomerang')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'cz_m75')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'uzi_9mm')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'p230_9mm')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'm1911_45acp')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'katana')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'hand_fan')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'rubber_basin')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'slipper')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'blackboard_eraser')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'chalk')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'baseball_bat')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'knuckle')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'toy_hammer')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('name', 'poison')->first()->id,
            ],
        ];

        foreach ($items as $item) {
            DB::table('item_supplies')->insert($item);
        }
    }
}
