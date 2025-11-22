<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NraSeriesGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nra_series_genre')->insert([
            ['Series_ID'=>1,'Genre_ID'=>1],
            ['Series_ID'=>1,'Genre_ID'=>2],
            ['Series_ID'=>2,'Genre_ID'=>1],
            ['Series_ID'=>2,'Genre_ID'=>3],
            ['Series_ID'=>3,'Genre_ID'=>2],
            ['Series_ID'=>3,'Genre_ID'=>3],
            ['Series_ID'=>4,'Genre_ID'=>4],
            ['Series_ID'=>4,'Genre_ID'=>1],
            ['Series_ID'=>5,'Genre_ID'=>4],
            ['Series_ID'=>5,'Genre_ID'=>2],
            ['Series_ID'=>6,'Genre_ID'=>3],
            ['Series_ID'=>6,'Genre_ID'=>1],
            ['Series_ID'=>7,'Genre_ID'=>2],
            ['Series_ID'=>7,'Genre_ID'=>4],
            ['Series_ID'=>8,'Genre_ID'=>3],
            ['Series_ID'=>8,'Genre_ID'=>1],
            ['Series_ID'=>9,'Genre_ID'=>2],
            ['Series_ID'=>9,'Genre_ID'=>4],
            ['Series_ID'=>10,'Genre_ID'=>1],
            ['Series_ID'=>10,'Genre_ID'=>3],
        ]);
    }
}
