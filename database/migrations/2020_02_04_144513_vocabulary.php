<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vocabulary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vocabulary', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('type');
            $table->string('chinese');
            $table->string('vietnamese');
            $table->string('vd');
            $table->bigInteger('audio_id')->unsigned();
            $table->foreign('audio_id')->references('id')->on('audio');
            $table->bigInteger('img_id');   
            $table->foreign('img_id')->references('id')->on('img');
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
        Schema::drop('vocabulary');
    }
}
