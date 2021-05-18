<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyTakingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey__takings', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('U')->nullable();
            $table->integer('C')->nullable();
            $table->integer('E')->nullable();
            $table->integer('Tr')->nullable();
            $table->integer('Tt')->nullable();
            $table->integer('D')->nullable();
            $table->integer('R')->nullable();
            $table->integer('survey_id')->nullable();
            $table->integer('section_id')->nullable();
            $table->integer('category_id')->nullable();
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
        Schema::dropIfExists('survey__takings');
    }
}
