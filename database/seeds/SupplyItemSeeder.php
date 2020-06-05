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
                'item_id' => Item::where('code', 'potion_stamina.mild_seven_cigarettes')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'potion_stamina.chocolate')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'potion_health.whiskey')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'potion_stamina.cookie')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'weapon.razor')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'weapon.butterfly_knife')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'armor_head.necklace')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'item.primer')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'weapon.hanafuda')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'weapon.playing_cards')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'weapon.portable_console')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'weapon.soap')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'weapon.toothbrush')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'item.hair_spray')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'armor_head.glasses')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'item.lighter')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'armor_accessory.magazine')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'armor_accessory.tamagotchi')->first()->id
            ],
            [
                'type' => SupplyType::Personal,
                'item_id' => Item::where('code', 'armor_accessory.cd_player')->first()->id
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.crossbow')->first()->id
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.kitchen_knife')->first()->id
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.hand_axe')->first()->id
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'armor_accessory.bulletproof_vest')->first()->id
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.remington_mk31')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.knife')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.dagger')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.mac_10')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'temp_radar.temp_radar')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.fork')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.metal_bet')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.derringer')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.military_knife')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'item.shamisen_wire')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.walther_ppk')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.m19_magnum')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.beretta_m9')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.m36_revolver')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.python_magnum')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.dagger_knife')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.browning_hipower')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.divers_knife')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.dart')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.grenade')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.m59_pistol')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.baton')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.m28_38special')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.sickle')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.ice_pick')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.nunchaku')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.boomerang')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.cz_m75')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.uzi_9mm')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.p230_9mm')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.m1911_45acp')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.katana')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.hand_fan')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.rubber_basin')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'armor_leg.slipper')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.blackboard_eraser')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.chalk')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.baseball_bat')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.knuckle')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'weapon.toy_hammer')->first()->id,
            ],
            [
                'type' => SupplyType::Goverment,
                'item_id' => Item::where('code', 'poison.poison')->first()->id,
            ],
        ];

        foreach ($items as $item) {
            DB::table('item_supplies')->insert($item);
        }
    }
}
