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
                'base_id' => Item::where('name', 'disel')->first()->id,
                'combine_id' => Item::where('name', 'fertilizer')->first()->id,
                'result_id' => Item::where('name', 'gunpowder')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'fertilizer')->first()->id,                
                'combine_id' => Item::where('name', 'disel')->first()->id,
                'result_id' => Item::where('name', 'gunpowder')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'gasoline')->first()->id,                
                'combine_id' => Item::where('name', 'empty_bottle')->first()->id,
                'result_id' => Item::where('name', 'molotov_cocktail')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'empty_bottle')->first()->id,                
                'combine_id' => Item::where('name', 'gasoline')->first()->id,
                'result_id' => Item::where('name', 'molotov_cocktail')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'primer')->first()->id,                
                'combine_id' => Item::where('name', 'gunpowder')->first()->id,
                'result_id' => Item::where('name', 'bomb')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'gunpowder')->first()->id,                
                'combine_id' => Item::where('name', 'primer')->first()->id,
                'result_id' => Item::where('name', 'bomb')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'gunpowder')->first()->id,                
                'combine_id' => Item::where('name', 'fuze')->first()->id,
                'result_id' => Item::where('name', 'dynamite')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'fuze')->first()->id,                
                'combine_id' => Item::where('name', 'gunpowder')->first()->id,
                'result_id' => Item::where('name', 'dynamite')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'gunpowder')->first()->id,                
                'combine_id' => Item::where('name', 'mine')->first()->id,
                'result_id' => Item::where('name', 'enchanted_mine')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'mine')->first()->id,                
                'combine_id' => Item::where('name', 'gunpowder')->first()->id,
                'result_id' => Item::where('name', 'enchanted_mine')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'hair_spray')->first()->id,                
                'combine_id' => Item::where('name', 'lighter')->first()->id,
                'result_id' => Item::where('name', 'temp_flamethrower')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'lighter')->first()->id,                
                'combine_id' => Item::where('name', 'hair_spray')->first()->id,
                'result_id' => Item::where('name', 'temp_flamethrower')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'chains')->first()->id,                
                'combine_id' => Item::where('name', 'sickle')->first()->id,
                'result_id' => Item::where('name', 'chain_sickle')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'sickle')->first()->id,                
                'combine_id' => Item::where('name', 'chains')->first()->id,
                'result_id' => Item::where('name', 'chain_sickle')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'baseball_bat')->first()->id,                
                'combine_id' => Item::where('name', 'nail')->first()->id,
                'result_id' => Item::where('name', 'nailed_bat')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'nail')->first()->id,                
                'combine_id' => Item::where('name', 'baseball_bat')->first()->id,
                'result_id' => Item::where('name', 'nailed_bat')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'bamboo')->first()->id,                
                'combine_id' => Item::where('name', 'nail')->first()->id,
                'result_id' => Item::where('name', 'nailed_bamboo')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'nail')->first()->id,                
                'combine_id' => Item::where('name', 'bamboo')->first()->id,
                'result_id' => Item::where('name', 'nailed_bamboo')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'rocks')->first()->id,                
                'combine_id' => Item::where('name', 'bamboo')->first()->id,
                'result_id' => Item::where('name', 'stone_axe')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'bamboo')->first()->id,                
                'combine_id' => Item::where('name', 'rocks')->first()->id,
                'result_id' => Item::where('name', 'stone_axe')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'whetstone')->first()->id,                
                'combine_id' => Item::where('name', 'knife')->first()->id,
                'result_id' => Item::where('name', 'custom_knife')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'knife')->first()->id,                
                'combine_id' => Item::where('name', 'whetstone')->first()->id,
                'result_id' => Item::where('name', 'custom_knife')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'crossbow')->first()->id,                
                'combine_id' => Item::where('name', 'piano_wire')->first()->id,
                'result_id' => Item::where('name', 'catapult')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'piano_wire')->first()->id,                
                'combine_id' => Item::where('name', 'crossbow')->first()->id,
                'result_id' => Item::where('name', 'catapult')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'bamboo')->first()->id,                
                'combine_id' => Item::where('name', 'knife')->first()->id,
                'result_id' => Item::where('name', 'bamboo_spear')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'knife')->first()->id,                
                'combine_id' => Item::where('name', 'bamboo')->first()->id,
                'result_id' => Item::where('name', 'bamboo_spear')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'laptop')->first()->id,                
                'combine_id' => Item::where('name', 'temp_radar')->first()->id,
                'result_id' => Item::where('name', 'radar')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'temp_radar')->first()->id,                
                'combine_id' => Item::where('name', 'laptop')->first()->id,
                'result_id' => Item::where('name', 'radar')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'portable_console')->first()->id,                
                'combine_id' => Item::where('name', 'temp_radar')->first()->id,
                'result_id' => Item::where('name', 'radar')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'temp_radar')->first()->id,                
                'combine_id' => Item::where('name', 'portable_console')->first()->id,
                'result_id' => Item::where('name', 'radar')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'soldering_iron')->first()->id,                
                'combine_id' => Item::where('name', 'broken_laptop')->first()->id,
                'result_id' => Item::where('name', 'laptop')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'broken_laptop')->first()->id,                
                'combine_id' => Item::where('name', 'soldering_iron')->first()->id,
                'result_id' => Item::where('name', 'laptop')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'phone')->first()->id,                
                'combine_id' => Item::where('name', 'laptop')->first()->id,
                'result_id' => Item::where('name', 'portable_pc')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'laptop')->first()->id,                
                'combine_id' => Item::where('name', 'phone')->first()->id,
                'result_id' => Item::where('name', 'portable_pc')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'precious_sword')->first()->id,                
                'combine_id' => Item::where('name', 'shaft')->first()->id,
                'result_id' => Item::where('name', 'crescent_blade')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'shaft')->first()->id,                
                'combine_id' => Item::where('name', 'precious_sword')->first()->id,
                'result_id' => Item::where('name', 'crescent_blade')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'kitchen_knife')->first()->id,                
                'combine_id' => Item::where('name', 'kitchen_knife')->first()->id,
                'result_id' => Item::where('name', 'double_knife')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'bamboo')->first()->id,                
                'combine_id' => Item::where('name', 'piano_wire')->first()->id,
                'result_id' => Item::where('name', 'shaft')->first()->id
            ],
            [
                'base_id' => Item::where('name', 'piano_wire')->first()->id,                
                'combine_id' => Item::where('name', 'bamboo')->first()->id,
                'result_id' => Item::where('name', 'shaft')->first()->id
            ],            
        ];

        foreach ($items as $item) {
            DB::table('item_combines')->insert($item);
        }
    }
}
