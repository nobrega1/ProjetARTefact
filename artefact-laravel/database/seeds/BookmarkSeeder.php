<?php

use Illuminate\Database\Seeder;

class BookmarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookmark')->delete();
        for ($i=1; $i<=100; $i++) {
            DB::table('bookmark')->insert([
                'clientno'=> rand(1,100),
                'productno'=>rand(1,100)
            ]);
        }
    }
}
