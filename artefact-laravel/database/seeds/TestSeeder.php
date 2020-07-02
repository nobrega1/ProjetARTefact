<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TestSeeder extends Seeder
{
    private function randDate() {
        $nbJours = rand(-2800,0);
        return Carbon::now()->addDays($nbJours);
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test')->delete();
        for ($i = 1; $i <= 100; $i++) {
            $date=$this->randDate();
            DB::table('test')->insert([
                'periodno' => rand(1,5),
                'productno' => rand(1,100),
                'clientno' => rand(1,100),
                'starttime' => $date,
                'endtime' => $date,
                'commentairestaff'=>'commentairestaff ' . $i ,
                'stars' => rand(1,5),
                'feedback'=>'feedback ' . $i ,
            ]);
        
        }
    }
}
