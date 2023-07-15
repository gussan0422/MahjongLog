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
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->integer('rate');
            $table->integer('tips01');
            $table->integer('tips02');
            $table->integer('tips03');
            $table->integer('tips04');
            $table->integer('income01');
            $table->integer('income02');
            $table->integer('income03');
            $table->integer('income04');
            $table->timestamps();
            
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
        Schema::dropIfExists('incomes');
    }
};
