<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_locations', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64);
            $table->string('code', 16);
            $table->string('message', 255);
            $table->unsignedTinyInteger('specialize');
            $table->unsignedTinyInteger('is_restrict');
            $table->unsignedTinyInteger('is_next_restrict');
            $table->timestamps();
            $table->unique('code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_locations');
    }
}
