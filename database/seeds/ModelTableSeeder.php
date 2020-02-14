<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('models')->insert([
            [
                'name' => 'Flying Spur',
                'brand_id' => 1
            ],
            [
                'name' => 'Continental',
                'brand_id' => 1
            ],
            [
                'name' => 'Camaro',
                'brand_id' => 2
            ],
            [
                'name' => 'Corvette Stingray',
                'brand_id' => 2
            ],
            [
                'name' => 'Challenger',
                'brand_id' => 3
            ],
            [
                'name' => 'Viper',
                'brand_id' => 3
            ],
            [
                'name' => 'LaFerrari',
                'brand_id' => 4
            ],
            [
                'name' => 'Dino',
                'brand_id' => 4
            ],
            [
                'name' => 'Mustang',
                'brand_id' => 5
            ],
            [
                'name' => 'Fusion',
                'brand_id' => 5
            ]
        ]);
    }
}
