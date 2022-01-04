<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSousMatieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sous_matieres', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('matiere_groupe')->unsigned();
            $table->foreign('matiere_groupe')->references('id')->on('matieres');

            $table->integer('matiere_associer')->unsigned();
            $table->foreign('matiere_associer')->references('id')->on('matieres');
            
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sous_matieres');
    }
}
