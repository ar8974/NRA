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
        Schema::create('nra_viewer', function (Blueprint $table) {
            $table->integer('View_ID')->primary();
            $table->string('F_Name',30)->notNullable();
            $table->string('L_Name',30)->notNullable();
            $table->string('Street',20)->notNullable();
            $table->string('City',30)->notNullable();
            $table->string('ZIP',10)->notNullable();
            $table->date('Acc_date')->notNullable();
            $table->decimal('Monthly_Charge',10,2)->notNullable();
            $table->char('Country_Code',2)->notNullable();

            $table->foreign('Country_Code')->references('Country_Code')->on('nra_country');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nra_viewer');
    }
};
