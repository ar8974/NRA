<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NraProd_HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nra_prod_house')->insert([
            ['Prod_ID'=>1,'House_ID'=>1],
            ['Prod_ID'=>2,'House_ID'=>1],
            ['Prod_ID'=>3,'House_ID'=>2],
            ['Prod_ID'=>4,'House_ID'=>2],
            ['Prod_ID'=>5,'House_ID'=>3],
            ['Prod_ID'=>6,'House_ID'=>3],
            ['Prod_ID'=>7,'House_ID'=>4],
            ['Prod_ID'=>8,'House_ID'=>4],
            ['Prod_ID'=>9,'House_ID'=>5],
            ['Prod_ID'=>10,'House_ID'=>5],
            ['Prod_ID'=>11,'House_ID'=>6],
            ['Prod_ID'=>12,'House_ID'=>6],
            ['Prod_ID'=>13,'House_ID'=>7],
            ['Prod_ID'=>14,'House_ID'=>7],
            ['Prod_ID'=>15,'House_ID'=>8],
            ['Prod_ID'=>16,'House_ID'=>8],
            ['Prod_ID'=>17,'House_ID'=>9],
            ['Prod_ID'=>18,'House_ID'=>9],
            ['Prod_ID'=>19,'House_ID'=>10],
            ['Prod_ID'=>20,'House_ID'=>10],
        ]);
    }
}
