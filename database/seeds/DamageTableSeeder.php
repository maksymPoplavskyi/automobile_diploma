<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DamageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('damages')->insert([
            ['name' => 'burn'],
            ['name' => 'rollover'],
            ['name' => 'vandalism'],
            ['name' => 'front end'],
            ['name' => 'mechanical'],
            ['name' => 'all over'],
        ]);
    }
}
