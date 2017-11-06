<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TranslationFieldsForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('TranslationFields', function(Blueprint $table){
            $table->foreign('translation_id')
                ->references('id')
                ->on('Translations')
                ->onDelete('cascade')
                ->unsigned();
            $table->foreign('type_id')
                ->references('id')
                ->on('TranslationFieldTypes')
                ->onDelete('cascade')
                ->unsigned();
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
