<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [   'id' => 1,
                'name' => 'bentley'
            ],
            [
                'id' => 2,
                'name' => 'chevrolet'
        ],
            [
                'id' => 3,
                'name' => 'dodge'
        ],
            [
                'id' => 4,
                'name' => 'ferrari'
        ],
            [
                'id' => 5,
                'name' => 'ford'
        ]
        ]);
    }
}
