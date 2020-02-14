<?php

use App\Models\Additional;
use App\Models\Automobile;
use App\Models\Damage;
use App\Models\Location;
use App\Models\Models;
use App\Models\Transmission;
use Illuminate\Database\Seeder;

class AutomobileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $models = Models::all();
        $locations = Location::all();
        $damages = Damage::all();
        $transmissions = Transmission::all();
        $additionals = Additional::all();

        foreach (range(1, 10, 1) as $i) {
            $automobile = factory(Automobile::class, 1)->make()
                ->each(function ($foo) use ($models, $locations, $damages, $transmissions, $additionals, $i) {
                    $foo->model_id = $models->where('id', $i)->first()->id;
                    $foo->location_id = $locations->random()->id;
                    $foo->damage_id = $damages->random()->id;
                    $foo->transmission_id = $transmissions->random()->id;
                    $foo->additional_id = $additionals->where('id', $i)->first()->id;
                })->toArray();

            Automobile::insert($automobile);
        }
    }
}
