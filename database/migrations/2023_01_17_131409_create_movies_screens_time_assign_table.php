<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('movies_screens_time_assign', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('movie_id')->unsigned();
            $table->integer('screen_id')->unsigned();
            $table->integer('time_id')->unsigned();
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->foreign('screen_id')->references('id')->on('screens');
            $table->foreign('time_id')->references('id')->on('times');
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
        Schema::dropIfExists('movies_screens_time_assign');
    }
};
