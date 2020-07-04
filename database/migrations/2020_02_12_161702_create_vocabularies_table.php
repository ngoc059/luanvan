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
            $table->bigInteger('type_vocabulary_id')->unsigned();
            $table->foreign('type_vocabulary_id')->references('id')->on('type_vocabulary');
            $table->string('chinese');
            $table->string('pinyin');
            $table->string('vietnamese');
            $table->string('vdTQ');
            $table->string('vdTV');
            $table->string('img');   
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
