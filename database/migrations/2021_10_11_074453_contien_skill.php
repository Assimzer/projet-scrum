<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContienSkill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contien_skill', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('offre_skills_id')->unsigned();
            $table->foreign('offre_skills_id')->references('id')->on('offre_skills');

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
        Schema::dropIfExists('contien_skill');
    }
}
