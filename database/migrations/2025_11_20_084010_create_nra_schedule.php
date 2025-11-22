<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nra_schedule', function (Blueprint $table) {
            $table->increments('Schedule_ID');
            $table->timestamp('Ep_Start')->notNullable();
            $table->timestamp('Ep_End')->notNullable();
            $table->bigInteger('Viewers')->notNullable();
            $table->char('Tech_Interrupt',3)->notNullable();
            $table->integer('Ep_ID')->notNullable();

            $table->foreign('Ep_ID')->references('Ep_ID')->on('nra_episode');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nra_schedule');
    }
};
