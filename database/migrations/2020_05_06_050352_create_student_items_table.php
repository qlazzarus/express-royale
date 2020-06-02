<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedTinyInteger('type');
            $table->unsignedBigInteger('item_id');
            $table->string('uuid', 64);
            $table->unsignedSmallInteger('endurance');
            $table->smallInteger('point');
            $table->timestamps();
            $table->foreign('student_id')->references('id')->on('students');
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
        Schema::dropIfExists('student_items');
    }
}
