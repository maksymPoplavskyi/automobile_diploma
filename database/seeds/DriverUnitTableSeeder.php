<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriverUnitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('driver_units')->insert([
            ['name' => 'front-wheel drive'],
            ['name' => 'rear drive'],
            ['name' => 'four-wheel drive'],
            ['name' => 'hybrid Synergetic Drive']
        ]);
    }
}
