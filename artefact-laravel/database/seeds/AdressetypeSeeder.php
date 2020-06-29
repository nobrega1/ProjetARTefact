<?php

use Illuminate\Database\Seeder;

class AdressetypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adressestype')->delete();
        for ($i = 1; $i <= 100; $i++) {
            DB::table('adressestype')->insert([
                'addressno' => rand(1,100),
                'description' =>'description'
                ]);
        }
    }
}
