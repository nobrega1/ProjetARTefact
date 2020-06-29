<?php

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brand')->delete();
        for ($i=1; $i<=100; $i++) {
            DB::table('brand')->insert([
                'companyno'=> rand(1,100),
                'name'=>'name' . $i,
                'shortdescr'=>'shortdescr' . $i,
                'longdescr'=>'longdescr ' . $i . ' Lorem ipsum dolor sit amet, consectetur ' .
                         'adipiscing elit. Proin vel auctor libero, quis venenatis ' .
                         'augue. Curabitur a pulvinar tortor, vitae condimentum ' . 
                         'libero. Cras eu massa sed lorem mattis lacinia. ' . 
                         'Vestibulum id feugiat turpis. Proin a lorem ligula.'

            ]);
        }
    }
}
