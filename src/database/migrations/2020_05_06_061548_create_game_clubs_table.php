<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_clubs', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64);
            $table->unsignedTinyInteger('reduce_stamina');
            $table->unsignedTinyInteger('random_skill');
            $table->decimal('skill_shot_multiplier', 1, 1)->default(0.0);
            $table->decimal('skill_cut_multiplier', 1, 1)->default(0.0);
            $table->decimal('skill_throw_multiplier', 1, 1)->default(0.0);
            $table->decimal('skill_fist_multiplier', 1, 1)->default(0.0);
            $table->decimal('skill_bow_multiplier', 1, 1)->default(0.0);
            $table->decimal('skill_melee_multiplier', 1, 1)->default(0.0);
            $table->decimal('skill_bomb_multiplier', 1, 1)->default(0.0);
            $table->decimal('skill_stab_multiplier', 1, 1)->default(0.0);
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
        Schema::dropIfExists('game_clubs');
    }
}
