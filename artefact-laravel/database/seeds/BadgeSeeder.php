<?php

use Illuminate\Database\Seeder;

class BadgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('badge')->delete();
        for ($i = 1; $i <= 100; $i++) {
            DB::table('badge')->insert([
                'periodno' => rand(1,5),
                'clientno' => rand(1,100)
                ]);
        }
    }
}
