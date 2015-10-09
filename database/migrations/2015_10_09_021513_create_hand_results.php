<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHandResults extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('hand_results', function(Blueprint $table) {
            $table->increments('id');
            $table->string('youstart');
            $table->string('youstop');
            $table->string('results');
            $table->string('dealerstart');
            $table->string('dealerstop');
            $table->boolean('didDouble');
            $table->integer('session_token');
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
