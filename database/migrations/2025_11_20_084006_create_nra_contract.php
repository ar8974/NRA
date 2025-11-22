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
        Schema::create('nra_contract', function (Blueprint $table) {
            $table->integer('Contract_ID')->primary();
            $table->date('Contract_date')->notNullable();
            $table->date('Contract_end')->notNullable();
            $table->decimal('Charge_per_ep',10,2)->notNullable();
            $table->integer('Series_ID')->notNullable();

            $table->foreign('Series_ID')->references('Series_ID')->on('nra_webseries');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nra_contract');
    }
};
