<?php

use Illuminate\Database\Seeder;

class CatalogueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalogue')->delete();
        for ($i = 1; $i <= 100; $i++) {
            DB::table('catalogue')->insert([
                'productno' => rand(1,100),
                'editionno' => rand(1,100)
                ]);
        }
    }
}
