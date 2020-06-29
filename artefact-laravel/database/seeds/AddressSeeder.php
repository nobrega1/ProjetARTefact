<?php

use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('address')->delete();
        for ($i=1; $i<=100; $i++) {
            DB::table('address')->insert([
                'street'=>'street' . $i,
                'streetnumber'=> rand(1,100),
                'pobox'=> rand(1,10000),
                'postalcode'=> rand(1,10000),
                'city'=>'city' . $i,
                'canton'=>'canton' . $i,
                'country'=>'country' . $i
            ]);
        }
    }
}
