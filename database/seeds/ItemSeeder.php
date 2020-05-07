<?php

use Illuminate\Database\Seeder;
use App\Enums\AmmoType;
use App\Enums\ArmorMaterial;
use App\Enums\AttackType;
use App\Enums\ItemType;
use App\Utils\IntegerUtil;

class ItemSeeder extends Seeder
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
                'type' => ItemType::Weapon,
                'name' => '맨손',
                'attack_type' => IntegerUtil::defactorize([AttackType::Fist]),
                'point' => 0,
                'endurance' => 0,
                'ammo_require' => false,
                'ammo_capacity' => 0,
                'ammo_type' => AmmoType::None,
                'armor_material' => ArmorMaterial::None
            ],
            [
                'type' => ItemType::Weapon,
                'name' => '석궁',
                'attack_type' => IntegerUtil::defactorize([AttackType::Bow, AttackType::Melee]),
                'point' => 20,
                'endurance' => 0,
                'ammo_require' => true,
                'ammo_capacity' => 1,
                'ammo_type' => AmmoType::Arrow,
                'armor_material' => ArmorMaterial::None
            ],
            [
                'type' => ItemType::Weapon,
                'name' => '식칼',
                'attack_type' => IntegerUtil::defactorize([AttackType::Cut, AttackType::Stab]),
                'point' => 15,
                'endurance' => 0,
                'ammo_require' => false,
                'ammo_capacity' => 0,
                'ammo_type' => AmmoType::None,
                'armor_material' => ArmorMaterial::None
            ],            
            [
                'type' => ItemType::Weapon,
                'name' => '손도끼',
                'attack_type' => IntegerUtil::defactorize([AttackType::Cut]),
                'point' => 17,
                'endurance' => 0,
                'ammo_require' => false,
                'ammo_capacity' => 0,
                'ammo_type' => AmmoType::None,
                'armor_material' => ArmorMaterial::None
            ],
            [
                'type' => ItemType::Weapon,
                'name' => '레밍턴M31RS',
                'attack_type' => IntegerUtil::defactorize([AttackType::Shot, AttackType::Melee]),
                'point' => 28,
                'endurance' => 0,
                'ammo_require' => true,
                'ammo_capacity' => 5,
                'ammo_type' => AmmoType::ShotGun12Gauge,
                'armor_material' => ArmorMaterial::None
            ],
            [
                'type' => ItemType::Weapon,
                'name' => '나이프',
                'attack_type' => IntegerUtil::defactorize([AttackType::Cut, AttackType::Stab]),
                'point' => 17,
                'endurance' => 0,
                'ammo_require' => false,
                'ammo_capacity' => 0,
                'ammo_type' => AmmoType::None,
                'armor_material' => ArmorMaterial::None
            ],   
            [
                'type' => ItemType::Weapon,
                'name' => '단도',
                'attack_type' => IntegerUtil::defactorize([AttackType::Cut, AttackType::Stab]),
                'point' => 15,
                'endurance' => 0,
                'ammo_require' => false,
                'ammo_capacity' => 0,
                'ammo_type' => AmmoType::None,
                'armor_material' => ArmorMaterial::None
            ],
            [
                'type' => ItemType::Weapon,
                'name' => '잉그램M10 서브머신건',
                'attack_type' => IntegerUtil::defactorize([AttackType::Shot, AttackType::Melee]),
                'point' => 30,
                'endurance' => 0,
                'ammo_require' => true,
                'ammo_capacity' => 32,
                'ammo_type' => AmmoType::Pistol9MM,
                'armor_material' => ArmorMaterial::None
            ],
            [
                'type' => ItemType::Weapon,
                'name' => '포크',
                'attack_type' => IntegerUtil::defactorize([AttackType::Stab]),
                'point' => 7,
                'endurance' => 0,
                'ammo_require' => false,
                'ammo_capacity' => 0,
                'ammo_type' => AmmoType::None,
                'armor_material' => ArmorMaterial::None
            ],
            [
                'type' => ItemType::Weapon,
                'name' => '금속 배트',
                'attack_type' => IntegerUtil::defactorize([AttackType::Melee]),
                'point' => 15,
                'endurance' => 0,
                'ammo_require' => false,
                'ammo_capacity' => 0,
                'ammo_type' => AmmoType::None,
                'armor_material' => ArmorMaterial::None
            ],
            [
                'type' => ItemType::Weapon,
                'name' => '22구경 2연발 데린져',
                'attack_type' => IntegerUtil::defactorize([AttackType::Shot, AttackType::Melee]),
                'point' => 20,
                'endurance' => 0,
                'ammo_require' => true,
                'ammo_capacity' => 2,
                'ammo_type' => AmmoType::Rifle22LR,
                'armor_material' => ArmorMaterial::None
            ],
            [
                'type' => ItemType::Weapon,
                'name' => '군용 나이프',
                'attack_type' => IntegerUtil::defactorize([AttackType::Cut, AttackType::Stab, AttackType::Throw]),
                'point' => 20,
                'endurance' => 1,
                'ammo_require' => false,
                'ammo_capacity' => 0,
                'ammo_type' => AmmoType::None,
                'armor_material' => ArmorMaterial::None
            ],
            [
                'type' => ItemType::Weapon,
                'name' => '월터PPK 9밀리',
                'attack_type' => IntegerUtil::defactorize([AttackType::Shot, AttackType::Melee]),
                'point' => 25,
                'endurance' => 0,
                'ammo_require' => true,
                'ammo_capacity' => 8,
                'ammo_type' => AmmoType::Pistol9MM,
                'armor_material' => ArmorMaterial::None
            ],
            [
                'type' => ItemType::Weapon,
                'name' => 'S&W M19 357 매그넘',
                'attack_type' => IntegerUtil::defactorize([AttackType::Shot, AttackType::Melee]),
                'point' => 26,
                'endurance' => 0,
                'ammo_require' => true,
                'ammo_capacity' => 6,
                'ammo_type' => AmmoType::Magnum357,
                'armor_material' => ArmorMaterial::None
            ],
            [
                'type' => ItemType::Weapon,
                'name' => '베레타M92F',
                'attack_type' => IntegerUtil::defactorize([AttackType::Shot, AttackType::Melee]),
                'point' => 25,
                'endurance' => 0,
                'ammo_require' => true,
                'ammo_capacity' => 14,
                'ammo_type' => AmmoType::Pistol9MM,
                'armor_material' => ArmorMaterial::None
            ],
            [
                'type' => ItemType::Weapon,
                'name' => 'S&W 치프스페셜 38구경',
                'attack_type' => IntegerUtil::defactorize([AttackType::Shot, AttackType::Melee]),
                'point' => 23,
                'endurance' => 0,
                'ammo_require' => true,
                'ammo_capacity' => 5,
                'ammo_type' => AmmoType::Revolver38Special,
                'armor_material' => ArmorMaterial::None
            ],
            [
                'type' => ItemType::Weapon,
                'name' => '콜트357 매그넘 리볼버',
                'attack_type' => IntegerUtil::defactorize([AttackType::Shot, AttackType::Melee]),
                'point' => 27,
                'endurance' => 0,
                'ammo_require' => true,
                'ammo_capacity' => 6,
                'ammo_type' => AmmoType::Magnum357,
                'armor_material' => ArmorMaterial::None
            ],            
            [
                'type' => ItemType::Weapon,
                'name' => '양날 나이프',
                'attack_type' => IntegerUtil::defactorize([AttackType::Cut, AttackType::Stab]),
                'point' => 20,
                'endurance' => 0,
                'ammo_require' => false,
                'ammo_capacity' => 0,
                'ammo_type' => AmmoType::None,
                'armor_material' => ArmorMaterial::None
            ],               
            [
                'type' => ItemType::Weapon,
                'name' => '브라우닝 하이파워 9mm',
                'attack_type' => IntegerUtil::defactorize([AttackType::Shot, AttackType::Melee]),
                'point' => 26,
                'endurance' => 0,
                'ammo_require' => true,
                'ammo_capacity' => 14,
                'ammo_type' => AmmoType::Pistol9MM,
                'armor_material' => ArmorMaterial::None
            ],            
            [
                'type' => ItemType::Weapon,
                'name' => '다이버즈 나이프',
                'attack_type' => IntegerUtil::defactorize([AttackType::Cut, AttackType::Stab]),
                'point' => 20,
                'endurance' => 0,
                'ammo_require' => false,
                'ammo_capacity' => 0,
                'ammo_type' => AmmoType::None,
                'armor_material' => ArmorMaterial::None
            ],                 
            [
                'type' => ItemType::Weapon,
                'name' => '다트',
                'attack_type' => IntegerUtil::defactorize([AttackType::Throw]),
                'point' => 5,
                'endurance' => 12,
                'ammo_require' => false,
                'ammo_capacity' => 0,
                'ammo_type' => AmmoType::None,
                'armor_material' => ArmorMaterial::None
            ],            
            [
                'type' => ItemType::Weapon,
                'name' => '수류탄',
                'attack_type' => IntegerUtil::defactorize([AttackType::Bomb]),
                'point' => 40,
                'endurance' => 2,
                'ammo_require' => false,
                'ammo_capacity' => 0,
                'ammo_type' => AmmoType::None,
                'armor_material' => ArmorMaterial::None
            ],               
            [
                'type' => ItemType::Weapon,
                'name' => 'S&W M59 오토',
                'attack_type' => IntegerUtil::defactorize([AttackType::Shot, AttackType::Melee]),
                'point' => 24,
                'endurance' => 0,
                'ammo_require' => true,
                'ammo_capacity' => 15,
                'ammo_type' => AmmoType::Pistol9MM,
                'armor_material' => ArmorMaterial::None
            ],               
            [
                'type' => ItemType::Weapon,
                'name' => '특수경봉',
                'attack_type' => IntegerUtil::defactorize([AttackType::Melee]),
                'point' => 13,
                'endurance' => 0,
                'ammo_require' => false,
                'ammo_capacity' => 0,
                'ammo_type' => AmmoType::None,
                'armor_material' => ArmorMaterial::None
            ],            
            [
                'type' => ItemType::Weapon,
                'name' => '콜트 하이웨이 패트롤맨 38구경',
                'attack_type' => IntegerUtil::defactorize([AttackType::Shot, AttackType::Melee]),
                'point' => 24,
                'endurance' => 0,
                'ammo_require' => true,
                'ammo_capacity' => 6,
                'ammo_type' => AmmoType::Revolver38Special,
                'armor_material' => ArmorMaterial::None
            ],            
        ];

        foreach ($items as $item) {
            DB::table('game_items')->insert($item);
        }
    }
}
