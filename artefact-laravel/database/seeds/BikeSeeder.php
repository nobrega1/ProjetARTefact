<?php

use Illuminate\Database\Seeder;

class BikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bike')->delete();
        for ($i=1; $i<=100; $i++) {
            DB::table('bike')->insert([
                'productno'=> rand(1,100),
                'frameunit'=>rand(1,100000),
                'framesize'=>rand(1,100000),
                'rimsize'=>rand(1,100000),
                'rimunit'=>rand(1,100000),
            ]);
        }
    }
}
