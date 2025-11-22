<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NraCountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('nra_country')->insert([
            ['Country_Code'=>'US','Country'=>'United States'],
            ['Country_Code'=>'IN','Country'=>'India'],
            ['Country_Code'=>'GB','Country'=>'United Kingdom'],
            ['Country_Code'=>'CA','Country'=>'Canada'],
            ['Country_Code'=>'AU','Country'=>'Australia'],
            ['Country_Code'=>'DE','Country'=>'Germany'],
            ['Country_Code'=>'FR','Country'=>'France'],
            ['Country_Code'=>'JP','Country'=>'Japan'],
            ['Country_Code'=>'CN','Country'=>'China'],
            ['Country_Code'=>'BR','Country'=>'Brazil'],
            ['Country_Code'=>'KR','Country'=>'South Korea'],
            ['Country_Code'=>'ES','Country'=>'Spain'],
            ['Country_Code'=>'RU','Country'=>'Russia'],
            ['Country_Code'=>'EG','Country'=>'Egypt'],
            ['Country_Code'=>'MX','Country'=>'Mexico'],
        ]);
    }
}