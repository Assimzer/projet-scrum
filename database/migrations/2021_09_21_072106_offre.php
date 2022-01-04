<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Carbon\Carbon;

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
            $table->uuid('offre_uuid')->default(Str::uuid()->toString());
            $table->string('titre');
            $table->text('description');
            $table->string('resumer');
            $table->string('telephone');
            $table->string('societer');
            $table->string('pdf')->nullable();
            $table->integer('offreType_id')->unsigned();
            $table->foreign('offreType_id')->references('id')->on('offreType');
            $table->integer('offreLocation_id')->unsigned();
            $table->foreign('offreLocation_id')->references('id')->on('offreLocation');

            $table->integer('posted_by')->unsigned();
            $table->foreign('posted_by')->references('id')->on('users');

            $table->timestamp('created_at')->default(Carbon::now());
            $table->timestamp('updated_at')->default(Carbon::now());
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
