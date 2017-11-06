<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UserTranslations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('translation_id');
            $table->foreign('translation_id')->references('id')->on('Translations')->onDelete('cascade');
            $table->time('timeSpent');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('Users')->onDelte('cascade');
            $table->dateTime('translationComplete');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('UserTranslations');
    }
}
