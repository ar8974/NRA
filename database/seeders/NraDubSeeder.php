<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NraDubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nra_dub')->insert([
            ['Language'=>'Spanish','Series_ID'=>1],
            ['Language'=>'French','Series_ID'=>1],
            ['Language'=>'Hindi','Series_ID'=>2],
            ['Language'=>'German','Series_ID'=>2],
            ['Language'=>'Japanese','Series_ID'=>3],
            ['Language'=>'English','Series_ID'=>3],
            ['Language'=>'Korean','Series_ID'=>4],
            ['Language'=>'Portuguese','Series_ID'=>4],
            ['Language'=>'Spanish','Series_ID'=>5],
            ['Language'=>'Italian','Series_ID'=>5],
            ['Language'=>'French','Series_ID'=>6],
            ['Language'=>'English','Series_ID'=>6],
            ['Language'=>'Hindi','Series_ID'=>7],
            ['Language'=>'German','Series_ID'=>7],
            ['Language'=>'Japanese','Series_ID'=>8],
            ['Language'=>'English','Series_ID'=>8],
            ['Language'=>'Spanish','Series_ID'=>9],
            ['Language'=>'Portuguese','Series_ID'=>9],
            ['Language'=>'French','Series_ID'=>10],
            ['Language'=>'English','Series_ID'=>10],
        ]);
    }
}
