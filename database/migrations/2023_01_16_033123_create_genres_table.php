<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('genres', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        DB::table('genres')->insert([
            ['id' => 1, 'name' => 'Action'],
            ['id' => 2, 'name' => 'Horror'],
            ['id' => 3, 'name' => 'Comendy'],
            ['id' => 4, 'name' => 'Romantic'],
            ['id' => 5, 'name' => 'Animation'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genre');
    }
};
