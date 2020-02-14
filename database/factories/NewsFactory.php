<?php

/** @var Factory $factory */

use App\Models\News;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;

$factory->define(News::class, function (Faker $faker) {
    return [
        'title' => $faker->text('21'),
        'text' => $faker->paragraph,
        'image' => '/storage/images/' . Str::random(10) . '.jpg'
    ];
});
