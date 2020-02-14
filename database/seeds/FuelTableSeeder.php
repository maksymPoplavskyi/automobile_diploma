<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fuels')->insert([
            ['name' => 'diesel'],
            ['name' => 'electric'],
            ['name' => 'flexible fuel'],
            ['name' => 'gas'],
            ['name' => 'hybrid engine']
        ]);
    }
}
