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
        Schema::create('nra_release_country', function (Blueprint $table) {
            $table->integer('Series_ID');
            $table->char('Country_Code',2);
            $table->primary(['Series_ID','Country_Code']);

            $table->foreign('Series_ID')->references('Series_ID')->on('nra_webseries');
            $table->foreign('Country_Code')->references('Country_Code')->on('nra_country');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nra_release_country');
    }
};
