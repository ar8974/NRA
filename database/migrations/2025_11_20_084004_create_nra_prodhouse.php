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
        Schema::create('nra_prodhouse', function (Blueprint $table) {
            $table->integer('House_ID')->primary();
            $table->string('Name', 30)->notNullable();
            $table->string('Street', 20)->notNullable();
            $table->string('City', 30)->notNullable();
            $table->string('ZIP', 10)->notNullable();
            $table->integer('Year_Est')->notNullable();
            $table->char('Country_Code', 2)->notNullable();

            $table->foreign('Country_Code')->references('Country_Code')->on('nra_country');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nra_prodhouse');
    }
};
