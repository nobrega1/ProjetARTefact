<?php

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event')->delete();
        for ($i = 1; $i <= 2; $i++) {
            DB::table('event')->insert([
                'name' => 'Bike test' . $i,]);
        }
    }
}
