<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NraReleaseCountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nra_release_country')->insert([
            ['Series_ID'=>1,'Country_Code'=>'US'],
            ['Series_ID'=>1,'Country_Code'=>'GB'],
            ['Series_ID'=>2,'Country_Code'=>'IN'],
            ['Series_ID'=>2,'Country_Code'=>'US'],
            ['Series_ID'=>3,'Country_Code'=>'GB'],
            ['Series_ID'=>3,'Country_Code'=>'CA'],
            ['Series_ID'=>4,'Country_Code'=>'CA'],
            ['Series_ID'=>4,'Country_Code'=>'AU'],
            ['Series_ID'=>5,'Country_Code'=>'AU'],
            ['Series_ID'=>5,'Country_Code'=>'DE'],
            ['Series_ID'=>6,'Country_Code'=>'DE'],
            ['Series_ID'=>6,'Country_Code'=>'FR'],
            ['Series_ID'=>7,'Country_Code'=>'FR'],
            ['Series_ID'=>7,'Country_Code'=>'JP'],
            ['Series_ID'=>8,'Country_Code'=>'JP'],
            ['Series_ID'=>8,'Country_Code'=>'CN'],
            ['Series_ID'=>9,'Country_Code'=>'CN'],
            ['Series_ID'=>9,'Country_Code'=>'BR'],
            ['Series_ID'=>10,'Country_Code'=>'BR'],
            ['Series_ID'=>10,'Country_Code'=>'US'],
        ]);
    }
}
