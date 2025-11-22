<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NraScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nra_schedule')->insert([
            ['Schedule_ID'=>1,'Ep_Start'=>'2025-11-20 18:00:00','Ep_End'=>'2025-11-20 18:30:00','Viewers'=>5000,'Tech_Interrupt'=>'NO','Ep_ID'=>1],
            ['Schedule_ID'=>2,'Ep_Start'=>'2025-11-21 18:00:00','Ep_End'=>'2025-11-21 18:30:00','Viewers'=>5200,'Tech_Interrupt'=>'NO','Ep_ID'=>2],
            ['Schedule_ID'=>3,'Ep_Start'=>'2025-11-22 18:00:00','Ep_End'=>'2025-11-22 18:30:00','Viewers'=>5300,'Tech_Interrupt'=>'YES','Ep_ID'=>3],
            ['Schedule_ID'=>4,'Ep_Start'=>'2025-11-20 19:00:00','Ep_End'=>'2025-11-20 19:30:00','Viewers'=>4000,'Tech_Interrupt'=>'NO','Ep_ID'=>4],
            ['Schedule_ID'=>5,'Ep_Start'=>'2025-11-21 19:00:00','Ep_End'=>'2025-11-21 19:30:00','Viewers'=>4200,'Tech_Interrupt'=>'NO','Ep_ID'=>5],
            ['Schedule_ID'=>6,'Ep_Start'=>'2025-11-22 19:00:00','Ep_End'=>'2025-11-22 19:30:00','Viewers'=>4500,'Tech_Interrupt'=>'YES','Ep_ID'=>6],
            ['Schedule_ID'=>7,'Ep_Start'=>'2025-11-20 20:00:00','Ep_End'=>'2025-11-20 20:30:00','Viewers'=>3000,'Tech_Interrupt'=>'NO','Ep_ID'=>7],
            ['Schedule_ID'=>8,'Ep_Start'=>'2025-11-21 20:00:00','Ep_End'=>'2025-11-21 20:30:00','Viewers'=>3200,'Tech_Interrupt'=>'NO','Ep_ID'=>8],
            ['Schedule_ID'=>9,'Ep_Start'=>'2025-11-22 20:00:00','Ep_End'=>'2025-11-22 20:30:00','Viewers'=>3300,'Tech_Interrupt'=>'YES','Ep_ID'=>9],
            ['Schedule_ID'=>10,'Ep_Start'=>'2025-11-20 21:00:00','Ep_End'=>'2025-11-20 21:30:00','Viewers'=>2800,'Tech_Interrupt'=>'NO','Ep_ID'=>10],
            ['Schedule_ID'=>11,'Ep_Start'=>'2025-11-21 21:00:00','Ep_End'=>'2025-11-21 21:30:00','Viewers'=>2900,'Tech_Interrupt'=>'NO','Ep_ID'=>11],
            ['Schedule_ID'=>12,'Ep_Start'=>'2025-11-22 21:00:00','Ep_End'=>'2025-11-22 21:30:00','Viewers'=>3100,'Tech_Interrupt'=>'YES','Ep_ID'=>12],
            ['Schedule_ID'=>13,'Ep_Start'=>'2025-11-20 22:00:00','Ep_End'=>'2025-11-20 22:30:00','Viewers'=>3500,'Tech_Interrupt'=>'NO','Ep_ID'=>13],
            ['Schedule_ID'=>14,'Ep_Start'=>'2025-11-21 22:00:00','Ep_End'=>'2025-11-21 22:30:00','Viewers'=>3600,'Tech_Interrupt'=>'NO','Ep_ID'=>14],
            ['Schedule_ID'=>15,'Ep_Start'=>'2025-11-22 22:00:00','Ep_End'=>'2025-11-22 22:30:00','Viewers'=>3700,'Tech_Interrupt'=>'YES','Ep_ID'=>15],
            ['Schedule_ID'=>16,'Ep_Start'=>'2025-11-20 23:00:00','Ep_End'=>'2025-11-20 23:30:00','Viewers'=>2200,'Tech_Interrupt'=>'NO','Ep_ID'=>16],
            ['Schedule_ID'=>17,'Ep_Start'=>'2025-11-21 23:00:00','Ep_End'=>'2025-11-21 23:30:00','Viewers'=>2400,'Tech_Interrupt'=>'NO','Ep_ID'=>17],
            ['Schedule_ID'=>18,'Ep_Start'=>'2025-11-22 23:00:00','Ep_End'=>'2025-11-22 23:30:00','Viewers'=>2500,'Tech_Interrupt'=>'YES','Ep_ID'=>18],
            ['Schedule_ID'=>19,'Ep_Start'=>'2025-11-23 18:00:00','Ep_End'=>'2025-11-23 18:30:00','Viewers'=>2000,'Tech_Interrupt'=>'NO','Ep_ID'=>19],
            ['Schedule_ID'=>20,'Ep_Start'=>'2025-11-23 19:00:00','Ep_End'=>'2025-11-23 19:30:00','Viewers'=>2100,'Tech_Interrupt'=>'NO','Ep_ID'=>20],
        ]);
    }
}
