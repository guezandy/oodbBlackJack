<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStrategy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('strategy', function(Blueprint $table) {
            $table->increments('id');
            $table->string('dealer');
            $table->string('card1');
            $table->string('card2');
            $table->string('move');
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
