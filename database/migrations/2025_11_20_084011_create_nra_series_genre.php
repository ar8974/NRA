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
        Schema::create('nra_series_genre', function (Blueprint $table) {
            $table->integer('Series_ID');
            $table->integer('Genre_ID');

            $table->primary(['Series_ID','Genre_ID']); // composite PK
            $table->foreign('Series_ID')->references('Series_ID')->on('nra_webseries');
            $table->foreign('Genre_ID')->references('Genre_ID')->on('nra_genre');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nra_series_genre');
    }
};
