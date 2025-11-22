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
        Schema::create('nra_producer', function (Blueprint $table) {
            $table->integer('Prod_ID')->primary();
            $table->string('F_Name', 30)->notNullable();
            $table->string('L_Name', 30)->notNullable();
            $table->string('Street', 20)->notNullable();
            $table->string('City', 30)->notNullable();
            $table->string('ZIP', 10)->notNullable();
            $table->string('Phone_code', 5)->notNullable();
            $table->string('Local_Phone', 25)->notNullable();
            $table->string('Email', 30)->notNullable();
            $table->char('Country_Code', 2)->notNullable();

            $table->unique(['Phone_code','Local_Phone']);
            $table->foreign('Country_Code')->references('Country_Code')->on('nra_country');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nra_producer');
    }
};
