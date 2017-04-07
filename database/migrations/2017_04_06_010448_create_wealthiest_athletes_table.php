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
        $table->integer('rank');//rank, based on wealth, among athletes
        $table->string('fname');//first name
        $table->string('lname');//last name
        $table->string('nationality');//nation of origin
        $table->double('totalEarnings',5,1);//endorsements plus salary plus personal accumulation
        $table->double('salary',5,1);//yearly salary
        $table->double('endorsements',5,1);//total earnings from endorsements alone
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
