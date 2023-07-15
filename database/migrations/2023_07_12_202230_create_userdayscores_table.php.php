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
        Schema::create('userdayscores', function (Blueprint $table) {
            $table->id();
            $table->integer('userdayscore');
            $table->timestamps();
            
            $table->foreignId('user_id')->constrained('id')->on('users');
            $table->foreignId('date_id')->constrained('id')->on('dates');
            $table->foreignId('income_id')->constrained('id')->on('incomes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userdayscores');
    }
};
