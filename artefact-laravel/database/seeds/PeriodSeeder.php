<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PeriodSeeder extends Seeder
{
    private function randDate() {
        $nbJours = rand(-2800,0);
        return Carbon::now()->addDays($nbJours);
    }
    private function randhour() {
        $hours = rand(-2800,0);
        return Carbon::now()->addHour($hours);
    }

    //addHour()
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('period')->delete();
        for ($i=1; $i<=5; $i++) {
            $date=$this->randDate();
            DB::table('period')->insert([
              'editionno'=> $i,
              'date'=>$date,
              'start'=>$date,
              'end'=>$date
            ]);
        }
    }
}
