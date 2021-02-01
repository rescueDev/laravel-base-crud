<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Device;
use Faker\Generator as Faker;

$factory->define(Device::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'model' => $faker->swiftBicNumber,
        'price' => rand(5, 2000),
        'consumption' => rand(0, 2000),
    ];
});
