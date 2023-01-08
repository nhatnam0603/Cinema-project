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
        Schema::create('movies_casts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cast_id')->unsigned();
            $table->integer('movie_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('cast_id')->references('id')->on('casts');
            $table->foreign('movie_id')->references('id')->on('movies');
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
