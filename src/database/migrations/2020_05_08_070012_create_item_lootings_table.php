<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemLootingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_lootings', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('location_id');
            $table->unsignedBigInteger('item_id');
            $table->smallInteger('point');
            $table->unsignedSmallInteger('endurance');
            $table->unsignedTinyInteger('is_trap_activated')->default(0);
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
        Schema::dropIfExists('item_lootings');
    }
}
