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
                'name'=> Arr::random(['Wheeler', ' Banshee ','Cannondale']),
                'shortdescr'=>'shortdescr' .$i,
                'longdescr'=>Str::random(100)
            ]);
        }
    }
}
