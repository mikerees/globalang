<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranslationFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TranslationFields', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('translation_id');
            $table->string('name');
            $table->integer('type_id');
            $table->foreign('translation_id')->references('id')->on('Translations')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('TranslationFieldTypes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('TranslationFields');
    }
}
