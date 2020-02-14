<?php

use App\Models\Additional;
use App\Models\Driver_unit;
use App\Models\Fuel;
use Illuminate\Database\Seeder;

class AdditionalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fuels = Fuel::all();
        $units = Driver_unit::all();

        $additionals = factory(Additional::class, 10)->make()->each(function ($foo) use ($fuels, $units) {
            $foo->fuel_id = $fuels->random()->id;
            $foo->driver_unit_id = $units->random()->id;
        })->toArray();

        Additional::insert($additionals);
    }
}
