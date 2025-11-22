<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NraGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nra_genre')->insert([
            ['Genre_ID'=>1,'Name'=>'Action'],
            ['Genre_ID'=>2,'Name'=>'Drama'],
            ['Genre_ID'=>3,'Name'=>'Comedy'],
            ['Genre_ID'=>4,'Name'=>'Horror'],
            ['Genre_ID'=>5,'Name'=>'Sci-Fi'],
            ['Genre_ID'=>6,'Name'=>'Thriller'],
            ['Genre_ID'=>7,'Name'=>'Romance'],
            ['Genre_ID'=>8,'Name'=>'Fantasy'],
            ['Genre_ID'=>9,'Name'=>'Mystery'],
            ['Genre_ID'=>10,'Name'=>'Animation'],
        ]);
    }
}
