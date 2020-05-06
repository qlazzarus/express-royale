<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Weapon()
 * @method static static ArmorHead()
 * @method static static ArmorBody()
 * @method static static ArmorArm()
 * @method static static ArmorLeg()
 * @method static static ArmorAccessory()
 * @method static static ItemSlot0()
 * @method static static ItemSlot1()
 * @method static static ItemSlot2()
 * @method static static ItemSlot3()
 * @method static static ItemSlot4()
 * @method static static ItemSlot5()
 */
final class ItemEquipType extends Enum
{
    const Weapon = 0;
    const ArmorHead = 1;
    const ArmorBody = 2;
    const ArmorArm = 3;
    const ArmorLeg = 4;
    const ArmorAccessory = 5;
    const ItemSlot0 = 6;
    const ItemSlot1 = 7;
    const ItemSlot2 = 8;
    const ItemSlot3 = 9;
    const ItemSlot4 = 10;
    const ItemSlot5 = 11;
}
