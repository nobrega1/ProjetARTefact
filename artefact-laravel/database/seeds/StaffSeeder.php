<?php

use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->delete();
        for ($i = 1; $i <= 100; $i++) {
            DB::table('staff')->insert([
                'personno' => rand(1,100)
                ]);
        }
    }
}
