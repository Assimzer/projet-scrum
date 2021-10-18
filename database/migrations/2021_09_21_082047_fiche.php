<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Fiche extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiche', function(Blueprint $table){
            $table->increments('id');
            $table->string('demandeurEmploi');
            $table->string('autreDemandeur');
            $table->string('formationProjet');
            $table->string('connaissance');
            $table->text('motivation');
            $table->string('niveauScolaire');
            $table->string('experiencePro');
            $table->string('atouts');
            $table->string('difficulteSolution');
            $table->string('EntrepriseTrouvée');
            $table->string('posteConforme');
            $table->string('demarche');
            $table->string('typeEntreprise');
            $table->string('secteurGeo');
            $table->text('bilan');
            $table->string('amenagement');
            $table->boolean('permis');
            $table->boolean('vehicule');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fiche');
    }
}
