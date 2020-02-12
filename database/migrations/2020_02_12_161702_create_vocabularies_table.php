<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVocabulariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vocabularies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('types');
            $table->string('chinese');
            $table->string('vietnamese');
            $table->string('vd');
            $table->bigInteger('audio_id')->unsigned();
            $table->foreign('audio_id')->references('id')->on('audio');
            $table->bigInteger('img_id')->unsigned();   
            $table->foreign('img_id')->references('id')->on('imgs');
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
        Schema::dropIfExists('vocabularies');
    }
}
