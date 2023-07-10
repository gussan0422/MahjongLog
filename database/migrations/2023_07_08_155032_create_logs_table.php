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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 10);
            $table->string('Email', 10);
            $table->string('password', 10);
            $table->timestamps();
            $table->softDeletes();
        });
        
        Schema::create('dates', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        
        Schema::create('gamescores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('gamescore');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
        
        Schema::create('totalscores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gamescore_id');
            $table->string('sumgamescore');
            $table->timestamps();
            
            $table->foreign('gamescore_id')->references('id')->on('gamescores');
        });
        
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('totalscore_id');
            $table->string('tips');
            $table->string('rate');
            $table->timestamps();
            
            $table->foreign('totalscore_id')->references('id')->on('totalscores');
        });
        
        Schema::create('dayscores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('date_id');
            $table->unsignedBigInteger('income_id');
            $table->string('dayscore');
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('date_id')->references('id')->on('dates');
            $table->foreign('income_id')->references('id')->on('incomes');
        });
        
        Schema::create('allscores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('date_id');
            $table->unsignedBigInteger('dayscore_id');
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('date_id')->references('id')->on('dates');
            $table->foreign('dayscore_id')->references('id')->on('dayscores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('dates');
        Schema::dropIfExists('gamescores');
        Schema::dropIfExists('totalscores');
        Schema::dropIfExists('incomes');
        Schema::dropIfExists('dayscores');
        Schema::dropIfExists('allscores');
    }
};
