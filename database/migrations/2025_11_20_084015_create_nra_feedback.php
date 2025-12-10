<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('nra_feedback', function (Blueprint $table) {
            $table->text('Feedback_text')->nullable();
            $table->integer('Rating')->notNullable();
            $table->date('Feedback_date')->notNullable();
            $table->integer('View_ID')->notNullable();
            $table->integer('Series_ID')->notNullable();

            $table->primary(['View_ID', 'Series_ID']);

            $table->foreign('View_ID')->references('View_ID')->on('nra_viewer');
            $table->foreign('Series_ID')->references('Series_ID')->on('nra_webseries');

            $table->index('Rating');
            $table->index('Feedback_date');
        });

        DB::statement("
            ALTER TABLE nra_feedback
            PARTITION BY RANGE (YEAR(Feedback_date)) (
                PARTITION p2022 VALUES LESS THAN (2023),
                PARTITION p2023 VALUES LESS THAN (2024),
                PARTITION p2024 VALUES LESS THAN (2025),
                PARTITION pmax VALUES LESS THAN MAXVALUE
            )
        ");
    }

    public function down(): void
    {
        Schema::dropIfExists('nra_feedback');
    }
};
