<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresetNpcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preset_npcs', function (Blueprint $table) {
            $table->id();

            // relation
            $table->unsignedInteger('user_id');

            // basic
            $table->string('username', 64);
            $table->unsignedTinyInteger('gender');
            $table->string('icon');

            // extends
            $table->string('club_name', 64);
            $table->string('klass_name', 64);
            $table->string('number', 64);

            // stat
            $table->unsignedTinyInteger('attack');
            $table->unsignedTinyInteger('defence');
            $table->unsignedTinyInteger('health');
            $table->unsignedTinyInteger('max_health');
            $table->unsignedSmallInteger('stamina');
            $table->unsignedTinyInteger('kill_count');
            $table->unsignedInteger('experience');

            // skill
            $table->unsignedSmallInteger('skill_shot');
            $table->unsignedSmallInteger('skill_cut');
            $table->unsignedSmallInteger('skill_throw');
            $table->unsignedSmallInteger('skill_fist');
            $table->unsignedSmallInteger('skill_bow');
            $table->unsignedSmallInteger('skill_melee');
            $table->unsignedSmallInteger('skill_bomb');
            $table->unsignedSmallInteger('skill_stab');

            // status
            $table->unsignedInteger('location_id');
            
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
        Schema::dropIfExists('preset_npcs');
    }
}
