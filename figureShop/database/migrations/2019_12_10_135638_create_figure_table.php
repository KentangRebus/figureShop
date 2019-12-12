<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFigureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('figure', function (Blueprint $table) {
            $table->increments('figureId');
            $table->string('categoryId');
            $table->string('figureName');
            $table->string('figureDescription');
            $table->string('figureQuantity');
            $table->string('figurePrice');
            $table->string('figurePicture');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('figure');
    }
}
