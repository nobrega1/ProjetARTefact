<?php

use Illuminate\Database\Seeder;

class MtbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mtb')->delete();
        for ($i = 1; $i <= 100; $i++) {
            DB::table('mtb')->insert([
                'bikeno' => $i,
                'feature' =>'feature'
                ]);
        }
    }
}
