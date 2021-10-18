<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PostulerOffre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postuler_offre', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_postulation');

            $table->integer('offre_id')->unsigned();
            $table->foreign('offre_id')->references('id')->on('offre');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('postuler_offre');
    }
}
