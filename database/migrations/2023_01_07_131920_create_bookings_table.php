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
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('movie_id');
            // $table->integer('seat_id');
            // $table->integer('time_id');
            // $table->integer('ticket_id');
            $table->foreignId('movie_id')->constrainted();
            $table->foreignId('seat_id')->constrainted();
            $table->foreignId('time_id')->constrainted();
            $table->foreignId('ticket_id')->constrainted();
            $table->timestamps();

            // $table->foreign('movie_id')->references('id')->on('movies');
            // $table->foreign('seat_id')->references('id')->on('seats');
            // $table->foreign('time_id')->references('id')->on('times');
            // $table->foreign('ticket_id')->references('id')->on('tickets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
