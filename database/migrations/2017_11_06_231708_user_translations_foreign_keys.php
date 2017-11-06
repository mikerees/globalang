<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserTranslationsForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('UserTranslations', function(Blueprint $table){
            $table->foreign('translation_id')
                ->references('id')
                ->on('Translations')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')
                ->on('Users')->
                onDelte('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
