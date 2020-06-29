<?php

use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job')->delete();
        for ($i = 1; $i <= 100; $i++) {
            DB::table('job')->insert([
                'editionno' => rand(1,2),
                'staffpersonno' => rand(1,100),
                'description'=>'description' . $i,
                ]);
        }
    }
}
