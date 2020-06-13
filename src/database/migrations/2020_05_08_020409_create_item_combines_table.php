<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemCombinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_combines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('base_id');
            $table->unsignedBigInteger('combine_id');
            $table->unsignedBigInteger('result_id');
            $table->timestamps();
            $table->unique(['base_id', 'combine_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_combines');
    }
}
