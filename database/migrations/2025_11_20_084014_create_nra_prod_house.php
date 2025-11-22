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
        Schema::create('nra_prod_house', function (Blueprint $table) {
            $table->integer('Prod_ID');
            $table->integer('House_ID');
            $table->primary(['Prod_ID','House_ID']);
            $table->foreign('Prod_ID')->references('Prod_ID')->on('nra_producer');
            $table->foreign('House_ID')->references('House_ID')->on('nra_prodhouse');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nra_prod_house');
    }
};
