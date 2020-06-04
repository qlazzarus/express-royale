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
                'item_id' => Item::where('code', 'phone.phone')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'mild_seven_cigarettes')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'chocolate')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'whiskey')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'cookie')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'razor')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'butterfly_knife')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'necklace')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'item.primer')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'hanafuda')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'playing_cards')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'weapon.portable_console')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'soap')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'toothbrush')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'item.hair_spray')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'glasses')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'item.lighter')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'magazine')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'tamagotchi')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'cd_player')->first()->id
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.crossbow')->first()->id
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'kitchen_knife')->first()->id
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'hand_axe')->first()->id
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'bulletproof_vest')->first()->id
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'remington_mk31')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.knife')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'dagger')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'mac_10')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'temp_radar.temp_radar')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'fork')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'metal_bet')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'derringer')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.military_knife')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'shamisen_wire')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'walther_ppk')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'm19_magnum')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.beretta_m9')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'm36_revolver')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'python_magnum')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'dagger_knife')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'browning_hipower')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'divers_knife')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'dart')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'grenade')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'm59_pistol')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'baton')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'm28_38special')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.sickle')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'ice_pick')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'nunchaku')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'boomerang')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'cz_m75')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'uzi_9mm')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'p230_9mm')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'm1911_45acp')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'katana')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'hand_fan')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'rubber_basin')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'armor_leg.slipper')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'blackboard_eraser')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'chalk')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.baseball_bat')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'knuckle')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'toy_hammer')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'poison')->first()->id,
            ],
        ];

        foreach ($items as $item) {
            DB::table('item_supplies')->insert($item);
        }
    }
}
