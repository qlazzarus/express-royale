<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetitionNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competition_news', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('competition_id');
            $table->unsignedTinyInteger('type');
            $table->string('message');
            $table->timestamps();
            $table->index('competition_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competition_news');
    }
}
