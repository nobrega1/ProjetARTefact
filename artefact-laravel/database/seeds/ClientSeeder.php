<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client')->delete();
        for ($i = 1; $i <= 100; $i++) {
            DB::table('client')->insert([
                'personno' => rand(1,100)
                ]);
        }
    }
}
