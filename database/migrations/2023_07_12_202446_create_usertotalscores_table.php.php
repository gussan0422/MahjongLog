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
        
        Schema::create('usertotalscores', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->foreignId('user_id')->constrained('id')->on('users');
            $table->foreignId('date_id')->constrained('id')->on('dates');
            $table->foreignId('userdayscore_id')->constrained('id')->on('userdayscores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usertotalscores');
    }
};
