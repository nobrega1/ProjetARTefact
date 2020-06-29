<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->delete();
        for ($i = 1; $i <= 100; $i++) {
            DB::table('product')->insert([
                'brandno'=> rand(1,100),
                'shortdescr'=>'shortdescr' . $i,
                'longdescr'=>'longdescr ' . $i . ' Lorem ipsum dolor sit amet, consectetur ' .
                         'adipiscing elit. Proin vel auctor libero, quis venenatis ' .
                         'augue. Curabitur a pulvinar tortor, vitae condimentum ' . 
                         'libero. Cras eu massa sed lorem mattis lacinia. ' . 
                         'Vestibulum id feugiat turpis. Proin a lorem ligula',
                'distinctivesign'=>'distinctivesign' . $i,
                'lienimage'=>'lienimage' . $i
                ]);
        }
    }
}
