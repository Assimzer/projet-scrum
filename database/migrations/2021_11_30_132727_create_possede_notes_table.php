<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePossedeNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('possede_notes', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('matiere_id')->unsigned();
            $table->foreign('matiere_id')->references('id')->on('matieres');

            $table->integer('note_id')->unsigned();
            $table->foreign('note_id')->references('id')->on('note');

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
        Schema::dropIfExists('possede_notes');
    }
}
