<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PossedeType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('possede_type', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('offre_id')->unsigned();
            $table->foreign('offre_id')->references('id')->on('offre');
            
            $table->integer('offreType_id')->unsigned();
            $table->foreign('offreType_id')->references('id')->on('offreType');

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
        Schema::dropIfExists('possede_type');
    }
}
