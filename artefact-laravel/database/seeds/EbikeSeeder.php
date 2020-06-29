<?php

use Illuminate\Database\Seeder;

class EbikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ebike')->delete();
        for ($i = 1; $i <= 100; $i++) {
            DB::table('ebike')->insert([
                'roadbikeno' => $i,
                'feature' =>'feature'
                ]);
        }
    }
}
