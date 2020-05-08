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
            $table->unsignedTinyInteger('is_reduce_stamina')->default(0);
            $table->unsignedTinyInteger('is_random_skill')->default(0);
            $table->unsignedTinyInteger('is_detect_poison')->default(0);
            $table->unsignedTinyInteger('is_hack_possible')->default(0);
            $table->decimal('skill_shot_multiplier', 3, 2)->default(0.00);
            $table->decimal('skill_cut_multiplier', 3, 2)->default(0.00);
            $table->decimal('skill_throw_multiplier', 3, 2)->default(0.00);
            $table->decimal('skill_fist_multiplier', 3, 2)->default(0.00);
            $table->decimal('skill_bow_multiplier', 3, 2)->default(0.00);
            $table->decimal('skill_melee_multiplier', 3, 2)->default(0.00);
            $table->decimal('skill_bomb_multiplier', 3, 2)->default(0.00);
            $table->decimal('skill_stab_multiplier', 3, 2)->default(0.00);
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
