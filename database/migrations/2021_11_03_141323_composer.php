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
        Schema::create('composer', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('matiere_id')->unsigned();
            $table->foreign('matiere_id')->references('id')->on('matieres');

            $table->integer('bulletin_id')->unsigned();
            $table->foreign('bulletin_id')->references('id')->on('bulletins');

            $table->string('appreciation');
            $table->string('coefGlobal');

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
        Schema::dropIfExists('composer');
    }
}
