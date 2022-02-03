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
            $table->string('title');
            $table->string('description');
            $table->string('nomCandidat');
            $table->string('prenomCandidat');
            $table->string('email');
            $table->string('address');
            $table->boolean('permis');
            $table->boolean('vehicule');
            $table->boolean('optionDeSIO');
            $table->boolean('entrepriseTrouvee');
            $table->boolean('conformeAFormation');
            $table->boolean('demarcheRealisee');
            $table->boolean('demandeEmploi');
            $table->enum('amenagement', ['PAI','PAP','PPS', 'aucun'])->default('aucun');
            $table->enum('adequationFormProjet', ['Conforme','pas-conforme','autre-orientation'])->default('Conforme');
            $table->enum('niveauScolaire', ['<10', '10-12', '12-15', '>15', 'non_concerne'])->default('10-12');
            $table->enum('experiencePro', ['oui-significatif', 'oui', 'non'])->default('oui');
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
        Schema::dropIfExists('fiche');
    }
}
