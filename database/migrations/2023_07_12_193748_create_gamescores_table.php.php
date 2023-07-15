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
        Schema::create('gamescores', function (Blueprint $table) {
            $table->id();
            $table->integer('gamescore01');
            $table->integer('gamescore02');
            $table->integer('gamescore03');
            $table->integer('gamescore04');
            $table->timestamps();

            $table->foreignId('user01_id')->constrained('id')->on('users');
            $table->foreignId('user02_id')->constrained('id')->on('users');
            $table->foreignId('user03_id')->constrained('id')->on('users');
            $table->foreignId('user04_id')->constrained('id')->on('users');
            $table->foreignId('groupscore_id')->constrained('id')->on('groupscores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gamescores');
    }
};
