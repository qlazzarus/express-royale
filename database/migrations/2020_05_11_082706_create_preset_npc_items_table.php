<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresetNpcItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preset_npc_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('preset_npc_id');
            $table->unsignedTinyInteger('type');
            $table->unsignedBigInteger('item_id');
            $table->unsignedSmallInteger('endurance');
            $table->smallInteger('point');
            $table->timestamps();
            $table->unique(['preset_npc_id', 'type']);
            $table->foreign('preset_npc_id')->references('id')->on('preset_npcs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preset_npc_items');
    }
}
