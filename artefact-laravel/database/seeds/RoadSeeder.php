<?php

use Illuminate\Database\Seeder;

class RoadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('road')->delete();
        for ($i = 1; $i <= 100; $i++) {
            DB::table('road')->insert([
                'bikeno' => $i,
                'feature' =>'feature'
                ]);
        }
    }
}
