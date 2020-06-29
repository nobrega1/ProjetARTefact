<?php

use Illuminate\Database\Seeder;

class GravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gravel')->delete();
        for ($i = 1; $i <= 100; $i++) {
            DB::table('gravel')->insert([
                'bikeno' => rand(1,100),
                'feature' =>'feature'
                ]);
        }
    }
}
