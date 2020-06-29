<?php

use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('person')->delete();
        for ($i = 1; $i <= 100; $i++) {
            DB::table('person')->insert([
                'addressno'=> rand(1,100),
                'name' => 'Nom' . $i,
                'firstname' => 'Nom' . $i,
                'email' => 'email' . $i . '@gmx.ch',
                'password' => Hash::make('password' . $i),
                'isactive' => rand(0, 1),
                'phonenumber'=> rand(1,10000000)
            ]);
        }
    }
}
