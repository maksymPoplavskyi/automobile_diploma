<?php

/** @var Factory $factory */

use App\Models\Additional;
use App\Models\Driver_unit;
use App\Models\Fuel;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Additional::class, function (Faker $faker) {

    return array(
        'color' => $faker->colorName,
        'engine' => $faker->randomFloat('1', '1', '7') . 'L ',
        'count_of_cylinders' => $faker->randomElement(array('4', '6', '12')),
        'fuel_id' => function () {
            return \factory(Fuel::class)->make()->id;
        },
        'driver_unit_id' => function () {
            return \factory(Driver_unit::class)->make()->id;
        },
        'has_key' => rand(0, 1),
        'state' => $faker->realText(50)
    );
});
