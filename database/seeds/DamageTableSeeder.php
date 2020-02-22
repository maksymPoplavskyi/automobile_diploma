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
            ['name' => 'burn - engine'],
            ['name' => 'cash for clunkers'],
            ['name' => 'frame damage reported'],
            ['name' => 'hail'],
            ['name' => 'minor dents/scratches'],
            ['name' => 'partial/incomplete repair'],
            ['name' => 'side'],
            ['name' => 'top/roof'],
            ['name' => 'undercarriage'],
            ['name' => 'water/flood'],
            ['name' => 'damage history'],
            ['name' => 'normal wear'],
            ['name' => 'rejected repair'],
            ['name' => 'rear end'],
            ['name' => 'stripped'],
            ['name' => 'unknown'],
            ['name' => 'missing/altered vin'],
            ['name' => 'replaced vin'],
            ['name' => 'biohazardous/chemical'],
        ]);
    }
}
