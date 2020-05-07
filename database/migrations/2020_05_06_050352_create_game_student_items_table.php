<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameStudentItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_student_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('student_id');
            $table->unsignedTinyInteger('type');
            $table->unsignedInteger('item_id');
            $table->string('item_name', 64);
            $table->unsignedTinyInteger('endurance');
            $table->unsignedTinyInteger('point');
            $table->timestamps();
            $table->unique(['student_id', 'type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_student_items');
    }
}
