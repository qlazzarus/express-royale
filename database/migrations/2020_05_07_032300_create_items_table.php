<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('type'); // \App\Enums\ItemType
            $table->string('name', 64);
            $table->unsignedTinyInteger('attack_type'); // \App\Enums\AttackType
            $table->smallInteger('point');
            $table->unsignedSmallInteger('endurance');
            $table->unsignedTinyInteger('ammo_require');
            $table->unsignedTinyInteger('ammo_capacity');
            $table->unsignedTinyInteger('ammo_type'); // \App\Enums\AmmoType
            $table->unsignedTinyInteger('armor_material'); // \App\Enums\ArmorMaterial
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
