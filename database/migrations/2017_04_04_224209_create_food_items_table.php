<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('foods', function(Blueprint $table) {
      $table->increments('id');
      $table->string('item');//food item
      $table->integer('calories');//total calories
      $table->integer('fat');//total fat in grams
      $table->integer('protein');//total protein in grams
      $table->integer('carbohydrates');//total carbs in grams
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
        Schema::dropIfExists('foods');
    }
}
