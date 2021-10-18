<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Composer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('composer', function(Blueprint $table){
            $table->increments('id');
            $table->string('appreciation');
            $table->integer('coefficientGlobal');
            $table->integer('matiere_id')->unsigned();
            $table->foreign('matiere_id')->references('id')->on('matiere');

            $table->integer('bulletin_id')->unsigned();
            $table->foreign('bulletin_id')->references('id')->on('bulletin');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('composer');
    }
}
