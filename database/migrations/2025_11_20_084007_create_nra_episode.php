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
        Schema::create('nra_episode', function (Blueprint $table) {
            $table->integer('Ep_ID')->primary();
            $table->string('Title', 30)->nullable();
            $table->integer('Ep_No')->notNullable();
            $table->integer('Series_ID')->notNullable();

            $table->unique(['Ep_No','Series_ID']);
            $table->foreign('Series_ID')->references('Series_ID')->on('nra_webseries');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nra_episode');
    }
};
