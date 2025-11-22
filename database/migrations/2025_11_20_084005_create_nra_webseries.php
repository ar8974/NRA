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
        Schema::create('nra_webseries', function (Blueprint $table) {
            $table->integer('Series_ID')->primary();
            $table->string('Name', 30)->notNullable();
            $table->date('Release')->notNullable();
            $table->integer('House_ID')->notNullable();
            $table->string('Country', 30)->notNullable();

            $table->foreign('House_ID')->references('House_ID')->on('nra_prodhouse');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nra_webseries');
    }
};
