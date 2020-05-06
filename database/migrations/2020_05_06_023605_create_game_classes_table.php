<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_classes', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('session_id');
            $table->string('name', 64);
            $table->unsignedTinyInteger('male_count');
            $table->unsignedTinyInteger('female_count');
            $table->timestamps();
            $table->index('session_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_classes');
    }
}
