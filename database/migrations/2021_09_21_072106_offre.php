<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Offre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offre', function(Blueprint $table){
            $table->increments('id');
            $table->string('titre');
            $table->date('date');
            $table->text('description');
            $table->string('resumer');
            $table->string('telephone');
            $table->string('pdf')->nullable();
            $table->string('entreprise_name')->nullable();
            $table->integer('offreType_id')->unsigned();
            $table->foreign('offreType_id')->references('id')->on('offreType');
            $table->integer('offreLocation_id')->unsigned();
            $table->foreign('offreLocation_id')->references('id')->on('offreLocation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offre');
    }
}
