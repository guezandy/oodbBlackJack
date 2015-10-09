<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStrategyResults extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('strategy_results', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('wins');
            $table->integer('losses');
            $table->integer('doubleCount');
            $table->integer('winlose');
            $table->string('random');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
