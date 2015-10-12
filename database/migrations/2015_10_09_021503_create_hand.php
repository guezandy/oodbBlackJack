<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHand extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('hand', function(Blueprint $table) {
            $table->increments('id');
            $table->string('visible');
            $table->string('hidden');
            $table->string('card1');
            $table->string('card2');
            $table->integer('session_token');
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
