<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NraWebseriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nra_webseries')->insert([
            ['Series_ID'=>1,'Name'=>'Action Saga','Release'=>'2023-01-10','House_ID'=>1,'Country'=>'US'],
            ['Series_ID'=>2,'Name'=>'Romantic Tales','Release'=>'2022-05-20','House_ID'=>2,'Country'=>'IN'],
            ['Series_ID'=>3,'Name'=>'Comedy Nights','Release'=>'2021-09-15','House_ID'=>3,'Country'=>'GB'],
            ['Series_ID'=>4,'Name'=>'Mystery Manor','Release'=>'2020-11-10','House_ID'=>4,'Country'=>'CA'],
            ['Series_ID'=>5,'Name'=>'Horror House','Release'=>'2023-07-01','House_ID'=>5,'Country'=>'AU'],
            ['Series_ID'=>6,'Name'=>'Sci-Fi Universe','Release'=>'2022-08-05','House_ID'=>6,'Country'=>'DE'],
            ['Series_ID'=>7,'Name'=>'Thriller Time','Release'=>'2021-12-12','House_ID'=>7,'Country'=>'FR'],
            ['Series_ID'=>8,'Name'=>'Fantasy World','Release'=>'2020-03-22','House_ID'=>8,'Country'=>'JP'],
            ['Series_ID'=>9,'Name'=>'Animated Fun','Release'=>'2023-04-14','House_ID'=>9,'Country'=>'CN'],
            ['Series_ID'=>10,'Name'=>'Drama Series','Release'=>'2022-06-18','House_ID'=>10,'Country'=>'BR'],
        ]);
    }
}
