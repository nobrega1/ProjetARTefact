<?php

use Illuminate\Database\Seeder;

class EmtbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('emtb')->delete();
        for ($i = 1; $i <= 100; $i++) {
            DB::table('emtb')->insert([
                'mtbbikeno' => $i,
                'feature' =>'feature'
                ]);
        }
    }
}
