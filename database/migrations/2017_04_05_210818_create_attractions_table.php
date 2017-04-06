<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('attractions', function(Blueprint $table) {
        $table->increments('id');
        $table->string('place');//name of the place
        $table->string('category');//type of place, ex: restaurant, bar, park, theater
        $table->string('price')->default('none');//price level, can be none/low/medium/high
        $table->double('rating',2,1);
        $table->boolean('liveMusic')->default(0);
        $table->boolean('takeOut')->default(0);
        $table->boolean('takesReservations')->default(0);
        $table->boolean('wifi')->default(0);
        $table->boolean('delivery')->default(0);
        $table->boolean('parking')->default(0);
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
        Schema::dropIfExists('attractions');
    }
}
