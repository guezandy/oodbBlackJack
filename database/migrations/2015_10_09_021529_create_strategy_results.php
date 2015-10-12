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
            $table->integer('pushes');
            $table->integer('doubleCount');
            $table->integer('aggregate_wins');
            $table->double('winlose');
            $table->string('random');
            $table->double('insert_cards');
            $table->integer('hands');
            $table->double('insert_strategy');
            $table->double('simulation');
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
        //
    }
}
