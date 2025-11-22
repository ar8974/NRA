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
        Schema::create('nra_sub', function (Blueprint $table) {
            $table->string('Language',30);
            $table->integer('Series_ID');
            $table->primary(['Series_ID','Language']);

            $table->foreign('Series_ID')->references('Series_ID')->on('nra_webseries');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nra_sub');
    }
};
