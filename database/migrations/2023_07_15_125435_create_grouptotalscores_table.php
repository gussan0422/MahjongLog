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
        Schema::create('grouptotalscores', function (Blueprint $table) {
            $table->id();
            $table->string('groupname');
            $table->integer('grouptotalscore');
            $table->timestamps();
            
            $table->foreignId('groupscore_id')->constrained('id')->on('grouptotalscores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grouptotalscores');
    }
};
