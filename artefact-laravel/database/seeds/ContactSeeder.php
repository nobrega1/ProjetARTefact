<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ContactSeeder extends Seeder
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
        DB::table('contact')->delete();
        for ($i = 1; $i <= 100; $i++) {
            $start=$this->randDate();
            $end=$this->randDate();
            DB::table('contact')->insert([
                'companyno' => rand(1,100),
                'personno' => rand(1,100),
                'since' =>$start,
                'until' =>$end
                ]);
        }
    }
}
