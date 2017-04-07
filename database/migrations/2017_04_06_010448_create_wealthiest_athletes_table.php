<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWealthiestAthletesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('athletes', function(Blueprint $table) {
        $table->increments('id');
        $table->integer('rank');
        $table->string('fname');
        $table->string('lname');
        $table->string('nationality');
        $table->double('totalEarnings',5,1);
        $table->double('salary',5,1);
        $table->double('endorsements',5,1);
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
        Schema::dropIfExists('athletes');
    }
}
