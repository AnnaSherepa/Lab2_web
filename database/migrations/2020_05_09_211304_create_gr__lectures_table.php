<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrLecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gr__lectures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gr_id');
            $table->unsignedBigInteger('lecture_id');

            $table->foreign('gr_id')->references('id')->on('grs');
            $table->foreign('lecture_id')->references('id')->on('lectures');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gr__lectures');
    }
}
