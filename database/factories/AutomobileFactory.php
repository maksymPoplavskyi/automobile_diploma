<?php

/** @var Factory $factory */

use App\Model;
use App\Models\Additional;
use App\Models\Automobile;
use App\Models\Damage;
use App\Models\Location;
use App\Models\Models;
use App\Models\Transmission;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Automobile::class, function (Faker $faker) {
    return [
        'model_id' => function () {
            return \factory(Models::class)->make()->id;
        },
        'year' => $faker->year,
        'mileage' => $faker->numberBetween(0, 222222),
        'location_id' => function () {
            return \factory(Location::class)->make()->id;
        },
        'damage_id' => function () {
            return \factory(Damage::class)->make()->id;
        },
        'current_rate' => $faker->randomElement(array('0', $faker->numberBetween('0','2000'))),
        'transmission_id' => function () {
            return \factory(Transmission::class)->make()->id;
        },
        'additional_id' => function () {
            return \factory(Additional::class)->make()->id;
        },
        'VIN' => $faker->uuid,
        'status' => 0,
        'created_at' => Carbon::now(),
        'updated_at' => null
    ];
});
