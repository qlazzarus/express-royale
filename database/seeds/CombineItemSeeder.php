<?php

use Illuminate\Database\Seeder;
use App\Item;

class CombineItemSeeder extends Seeder
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
                'base_id' => Item::where('code', 'item.disel')->first()->id,
                'combine_id' => Item::where('code', 'item.fertilizer')->first()->id,
                'result_id' => Item::where('code', 'item.gunpowder')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'item.fertilizer')->first()->id,                
                'combine_id' => Item::where('code', 'item.disel')->first()->id,
                'result_id' => Item::where('code', 'item.gunpowder')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'item.gasoline')->first()->id,                
                'combine_id' => Item::where('code', 'weapon.empty_bottle')->first()->id,
                'result_id' => Item::where('code', 'weapon.molotov_cocktail')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'weapon.empty_bottle')->first()->id,                
                'combine_id' => Item::where('code', 'item.gasoline')->first()->id,
                'result_id' => Item::where('code', 'weapon.molotov_cocktail')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'item.primer')->first()->id,                
                'combine_id' => Item::where('code', 'item.gunpowder')->first()->id,
                'result_id' => Item::where('code', 'weapon.bomb')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'item.gunpowder')->first()->id,                
                'combine_id' => Item::where('code', 'item.primer')->first()->id,
                'result_id' => Item::where('code', 'weapon.bomb')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'item.gunpowder')->first()->id,                
                'combine_id' => Item::where('code', 'item.fuze')->first()->id,
                'result_id' => Item::where('code', 'weapon.dynamite')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'item.fuze')->first()->id,                
                'combine_id' => Item::where('code', 'item.gunpowder')->first()->id,
                'result_id' => Item::where('code', 'weapon.dynamite')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'item.gunpowder')->first()->id,                
                'combine_id' => Item::where('code', 'trap.mine')->first()->id,
                'result_id' => Item::where('code', 'trap.enchanted_mine')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'trap.mine')->first()->id,                
                'combine_id' => Item::where('code', 'item.gunpowder')->first()->id,
                'result_id' => Item::where('code', 'trap.enchanted_mine')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'item.hair_spray')->first()->id,                
                'combine_id' => Item::where('code', 'item.lighter')->first()->id,
                'result_id' => Item::where('code', 'weapon.temp_flamethrower')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'item.lighter')->first()->id,                
                'combine_id' => Item::where('code', 'item.hair_spray')->first()->id,
                'result_id' => Item::where('code', 'weapon.temp_flamethrower')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'weapon.chains')->first()->id,                
                'combine_id' => Item::where('code', 'weapon.sickle')->first()->id,
                'result_id' => Item::where('code', 'weapon.chain_sickle')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'weapon.sickle')->first()->id,                
                'combine_id' => Item::where('code', 'weapon.chains')->first()->id,
                'result_id' => Item::where('code', 'weapon.chain_sickle')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'weapon.baseball_bat')->first()->id,                
                'combine_id' => Item::where('code', 'item.nail')->first()->id,
                'result_id' => Item::where('code', 'weapon.nailed_bat')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'item.nail')->first()->id,                
                'combine_id' => Item::where('code', 'weapon.baseball_bat')->first()->id,
                'result_id' => Item::where('code', 'weapon.nailed_bat')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'weapon.bamboo')->first()->id,                
                'combine_id' => Item::where('code', 'item.nail')->first()->id,
                'result_id' => Item::where('code', 'weapon.nailed_bamboo')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'item.nail')->first()->id,                
                'combine_id' => Item::where('code', 'weapon.bamboo')->first()->id,
                'result_id' => Item::where('code', 'weapon.nailed_bamboo')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'weapon.rocks')->first()->id,                
                'combine_id' => Item::where('code', 'weapon.bamboo')->first()->id,
                'result_id' => Item::where('code', 'weapon.stone_axe')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'weapon.bamboo')->first()->id,                
                'combine_id' => Item::where('code', 'weapon.rocks')->first()->id,
                'result_id' => Item::where('code', 'weapon.stone_axe')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,                
                'combine_id' => Item::where('code', 'weapon.knife')->first()->id,
                'result_id' => Item::where('code', 'weapon.custom_knife')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'weapon.knife')->first()->id,                
                'combine_id' => Item::where('code', 'weapon_refine.whetstone')->first()->id,
                'result_id' => Item::where('code', 'weapon.custom_knife')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'weapon.crossbow')->first()->id,                
                'combine_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'result_id' => Item::where('code', 'weapon.catapult')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'trap.piano_wire')->first()->id,                
                'combine_id' => Item::where('code', 'weapon.crossbow')->first()->id,
                'result_id' => Item::where('code', 'weapon.catapult')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'weapon.bamboo')->first()->id,                
                'combine_id' => Item::where('code', 'weapon.knife')->first()->id,
                'result_id' => Item::where('code', 'weapon.bamboo_spear')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'weapon.knife')->first()->id,                
                'combine_id' => Item::where('code', 'weapon.bamboo')->first()->id,
                'result_id' => Item::where('code', 'weapon.bamboo_spear')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'item.laptop')->first()->id,                
                'combine_id' => Item::where('code', 'temp_radar.temp_radar')->first()->id,
                'result_id' => Item::where('code', 'radar.radar')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'temp_radar.temp_radar')->first()->id,                
                'combine_id' => Item::where('code', 'item.laptop')->first()->id,
                'result_id' => Item::where('code', 'radar.radar')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'weapon.portable_console')->first()->id,                
                'combine_id' => Item::where('code', 'temp_radar.temp_radar')->first()->id,
                'result_id' => Item::where('code', 'radar.radar')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'temp_radar.temp_radar')->first()->id,
                'combine_id' => Item::where('code', 'weapon.portable_console')->first()->id,
                'result_id' => Item::where('code', 'radar.radar')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'weapon.soldering_iron')->first()->id,                
                'combine_id' => Item::where('code', 'weapon.broken_laptop')->first()->id,
                'result_id' => Item::where('code', 'item.laptop')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'weapon.broken_laptop')->first()->id,                
                'combine_id' => Item::where('code', 'weapon.soldering_iron')->first()->id,
                'result_id' => Item::where('code', 'item.laptop')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'phone.phone')->first()->id,                
                'combine_id' => Item::where('code', 'item.laptop')->first()->id,
                'result_id' => Item::where('code', 'portable_pc.portable_pc')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'item.laptop')->first()->id,                
                'combine_id' => Item::where('code', 'phone.phone')->first()->id,
                'result_id' => Item::where('code', 'portable_pc.portable_pc')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'weapon.precious_sword')->first()->id,                
                'combine_id' => Item::where('code', 'item.shaft')->first()->id,
                'result_id' => Item::where('code', 'crescent_blade')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'item.shaft')->first()->id,                
                'combine_id' => Item::where('code', 'weapon.precious_sword')->first()->id,
                'result_id' => Item::where('code', 'crescent_blade')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'kitchen_knife')->first()->id,                
                'combine_id' => Item::where('code', 'kitchen_knife')->first()->id,
                'result_id' => Item::where('code', 'double_knife')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'weapon.bamboo')->first()->id,                
                'combine_id' => Item::where('code', 'trap.piano_wire')->first()->id,
                'result_id' => Item::where('code', 'item.shaft')->first()->id
            ],
            [
                'base_id' => Item::where('code', 'trap.piano_wire')->first()->id,                
                'combine_id' => Item::where('code', 'weapon.bamboo')->first()->id,
                'result_id' => Item::where('code', 'item.shaft')->first()->id
            ],            
        ];

        foreach ($items as $item) {
            DB::table('item_combines')->insert($item);
        }
    }
}
