<?php

/** @var Factory $factory */

use App\Models\Automobile;
use App\Models\Image;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'image' => '/storage/images/automobiles/' . Str::random(10) . '.jpg',
        'automobile_id' => function () {
            return \factory(Automobile::class)->make()->id;
        },
        'created_at' => Carbon::now()
    ];
});
