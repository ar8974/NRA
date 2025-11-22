<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NraEpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nra_episode')->insert([
            ['Ep_ID'=>1,'Title'=>'Pilot','Ep_No'=>1,'Series_ID'=>1],
            ['Ep_ID'=>2,'Title'=>'The Chase','Ep_No'=>2,'Series_ID'=>1],
            ['Ep_ID'=>3,'Title'=>'Betrayal','Ep_No'=>3,'Series_ID'=>1],
            ['Ep_ID'=>4,'Title'=>'Love Begins','Ep_No'=>1,'Series_ID'=>2],
            ['Ep_ID'=>5,'Title'=>'Conflict','Ep_No'=>2,'Series_ID'=>2],
            ['Ep_ID'=>6,'Title'=>'Reunion','Ep_No'=>3,'Series_ID'=>2],
            ['Ep_ID'=>7,'Title'=>'Laugh Riot','Ep_No'=>1,'Series_ID'=>3],
            ['Ep_ID'=>8,'Title'=>'Funny Moments','Ep_No'=>2,'Series_ID'=>3],
            ['Ep_ID'=>9,'Title'=>'Pranks','Ep_No'=>3,'Series_ID'=>3],
            ['Ep_ID'=>10,'Title'=>'Haunted','Ep_No'=>1,'Series_ID'=>4],
            ['Ep_ID'=>11,'Title'=>'Secrets','Ep_No'=>2,'Series_ID'=>4],
            ['Ep_ID'=>12,'Title'=>'Mystery Night','Ep_No'=>3,'Series_ID'=>4],
            ['Ep_ID'=>13,'Title'=>'Scream','Ep_No'=>1,'Series_ID'=>5],
            ['Ep_ID'=>14,'Title'=>'Fear','Ep_No'=>2,'Series_ID'=>5],
            ['Ep_ID'=>15,'Title'=>'The Unknown','Ep_No'=>3,'Series_ID'=>5],
            ['Ep_ID'=>16,'Title'=>'Space Journey','Ep_No'=>1,'Series_ID'=>6],
            ['Ep_ID'=>17,'Title'=>'Alien Encounter','Ep_No'=>2,'Series_ID'=>6],
            ['Ep_ID'=>18,'Title'=>'Final Frontier','Ep_No'=>3,'Series_ID'=>6],
            ['Ep_ID'=>19,'Title'=>'Thrill Ride','Ep_No'=>1,'Series_ID'=>7],
            ['Ep_ID'=>20,'Title'=>'Dark Secrets','Ep_No'=>2,'Series_ID'=>7],
        ]);
    }
}
