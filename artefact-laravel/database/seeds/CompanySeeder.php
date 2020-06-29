<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company')->delete();
        for ($i = 1; $i <= 100; $i++) {
            DB::table('company')->insert([
                'corporatename' => 'moustache' . $i,]);
        }
    }
}
