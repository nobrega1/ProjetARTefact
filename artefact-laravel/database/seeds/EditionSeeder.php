<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EditionSeeder extends Seeder
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
        DB::table('edition')->delete();
        for ($i=1; $i<=100; $i++) {
            $start=$this->randDate();
            $end=$this->randDate();
            DB::table('edition')->insert([
              'eventno'=> rand(1,2),
              'place'=>'place ' . $i ,
              'start'=>$start,
              'end'=>$end
            ]);
        }
    }
}
