<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            // relation
            $table->unsignedInteger('competition_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('klass_id');
            $table->unsignedInteger('club_id');

            // basic
            $table->string('username', 64);
            $table->unsignedTinyInteger('gender');
            $table->string('icon');

            // extends
            $table->string('club_name', 64);
            $table->string('klass_name', 64);
            $table->string('number', 64);

            // message
            $table->string('message_killing');
            $table->string('message_dying');
            $table->string('message_appeal');

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
            $table->unsignedTinyInteger('tactics');
            $table->unsignedTinyInteger('injured');
            $table->unsignedInteger('location_id');
            $table->unsignedTinyInteger('status');
            $table->timestamp('status_changed_at');

            // death
            $table->unsignedInteger('last_attacker_id')->nullable();
            $table->string('death_cause', 128)->nullable();
            $table->unsignedInteger('death_by')->nullable();
            $table->timestamp('deathed_at')->nullable();

            $table->timestamps();
            $table->index('competition_id');
            $table->index('user_id');
            $table->index('location_id');
            $table->unique(['competition_id', 'username']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
