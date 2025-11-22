<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NraContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nra_contract')->insert([
            ['Contract_ID'=>1,'Contract_date'=>'2023-01-01','Contract_end'=>'2023-12-31','Charge_per_ep'=>100.50,'Series_ID'=>1],
            ['Contract_ID'=>2,'Contract_date'=>'2022-03-01','Contract_end'=>'2023-02-28','Charge_per_ep'=>150.00,'Series_ID'=>2],
            ['Contract_ID'=>3,'Contract_date'=>'2021-05-10','Contract_end'=>'2022-05-09','Charge_per_ep'=>120.00,'Series_ID'=>3],
            ['Contract_ID'=>4,'Contract_date'=>'2020-07-15','Contract_end'=>'2021-07-14','Charge_per_ep'=>200.00,'Series_ID'=>4],
            ['Contract_ID'=>5,'Contract_date'=>'2023-02-01','Contract_end'=>'2023-12-31','Charge_per_ep'=>180.00,'Series_ID'=>5],
            ['Contract_ID'=>6,'Contract_date'=>'2022-09-05','Contract_end'=>'2023-09-04','Charge_per_ep'=>130.00,'Series_ID'=>6],
            ['Contract_ID'=>7,'Contract_date'=>'2021-11-12','Contract_end'=>'2022-11-11','Charge_per_ep'=>160.00,'Series_ID'=>7],
            ['Contract_ID'=>8,'Contract_date'=>'2020-04-22','Contract_end'=>'2021-04-21','Charge_per_ep'=>140.00,'Series_ID'=>8],
            ['Contract_ID'=>9,'Contract_date'=>'2023-03-10','Contract_end'=>'2024-03-09','Charge_per_ep'=>170.00,'Series_ID'=>9],
            ['Contract_ID'=>10,'Contract_date'=>'2022-01-18','Contract_end'=>'2022-12-31','Charge_per_ep'=>190.00,'Series_ID'=>10],
        ]);
    }
}
