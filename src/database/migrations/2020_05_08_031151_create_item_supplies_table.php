<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemSuppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_supplies', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('type');
            $table->unsignedBigInteger('item_id');
            $table->timestamps();
            $table->unique(['type', 'item_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_supplies');
    }
}
