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
        Schema::create('groupscores', function (Blueprint $table) {
            $table->id();
            $table->integer('sumgamescore01');
            $table->integer('sumgamescore02');
            $table->integer('sumgamescore03');
            $table->integer('sumgamescore04');
            $table->timestamps();
            
            $table->foreignId('user01_id')->constrained('id')->on('users');
            $table->foreignId('user02_id')->constrained('id')->on('users');
            $table->foreignId('user03_id')->constrained('id')->on('users');
            $table->foreignId('user04_id')->constrained('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('totalscores');
    }
};
