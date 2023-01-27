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
        Schema::create('movies_casts', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('cast_id');
            // $table->integer('movie_id');
            $table->foreignId('cast_id')->constrainted();
            $table->foreignId('movie_id')->constrainted();
            $table->timestamps();
            
            // $table->foreign('cast_id')->references('id')->on('casts');
            // $table->foreign('movie_id')->references('id')->on('movies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies_casts');
    }
};
