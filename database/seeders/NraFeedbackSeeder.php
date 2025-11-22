<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NraFeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nra_feedback')->insert([
            ['Feedback_text'=>'Loved it','Rating'=>5,'Feedback_date'=>'2025-11-10','View_ID'=>1,'Series_ID'=>1],
            ['Feedback_text'=>'Good show','Rating'=>4,'Feedback_date'=>'2025-11-11','View_ID'=>2,'Series_ID'=>1],
            ['Feedback_text'=>'Could be better','Rating'=>3,'Feedback_date'=>'2025-11-12','View_ID'=>3,'Series_ID'=>2],
            ['Feedback_text'=>'Amazing','Rating'=>5,'Feedback_date'=>'2025-11-13','View_ID'=>4,'Series_ID'=>2],
            ['Feedback_text'=>'Not bad','Rating'=>3,'Feedback_date'=>'2025-11-14','View_ID'=>5,'Series_ID'=>3],
            ['Feedback_text'=>'Fantastic','Rating'=>5,'Feedback_date'=>'2025-11-15','View_ID'=>6,'Series_ID'=>3],
            ['Feedback_text'=>'Okayish','Rating'=>3,'Feedback_date'=>'2025-11-16','View_ID'=>7,'Series_ID'=>4],
            ['Feedback_text'=>'Excellent','Rating'=>5,'Feedback_date'=>'2025-11-17','View_ID'=>8,'Series_ID'=>4],
            ['Feedback_text'=>'Too slow','Rating'=>2,'Feedback_date'=>'2025-11-18','View_ID'=>9,'Series_ID'=>5],
            ['Feedback_text'=>'Loved the plot','Rating'=>5,'Feedback_date'=>'2025-11-19','View_ID'=>10,'Series_ID'=>5],
            ['Feedback_text'=>'Mediocre','Rating'=>3,'Feedback_date'=>'2025-11-10','View_ID'=>11,'Series_ID'=>6],
            ['Feedback_text'=>'Brilliant','Rating'=>5,'Feedback_date'=>'2025-11-11','View_ID'=>12,'Series_ID'=>6],
            ['Feedback_text'=>'Average','Rating'=>3,'Feedback_date'=>'2025-11-12','View_ID'=>13,'Series_ID'=>7],
            ['Feedback_text'=>'Loved the actors','Rating'=>5,'Feedback_date'=>'2025-11-13','View_ID'=>14,'Series_ID'=>7],
            ['Feedback_text'=>'Too long','Rating'=>2,'Feedback_date'=>'2025-11-14','View_ID'=>15,'Series_ID'=>8],
            ['Feedback_text'=>'Excellent storyline','Rating'=>5,'Feedback_date'=>'2025-11-15','View_ID'=>16,'Series_ID'=>8],
            ['Feedback_text'=>'Boring','Rating'=>2,'Feedback_date'=>'2025-11-16','View_ID'=>17,'Series_ID'=>9],
            ['Feedback_text'=>'Loved visuals','Rating'=>5,'Feedback_date'=>'2025-11-17','View_ID'=>18,'Series_ID'=>9],
            ['Feedback_text'=>'So-so','Rating'=>3,'Feedback_date'=>'2025-11-18','View_ID'=>19,'Series_ID'=>10],
            ['Feedback_text'=>'Masterpiece','Rating'=>5,'Feedback_date'=>'2025-11-19','View_ID'=>20,'Series_ID'=>10],
        ]);
    }
}
