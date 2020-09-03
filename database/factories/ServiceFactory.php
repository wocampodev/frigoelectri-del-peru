<?php

use Faker\Generator as Faker;

$factory->define(App\Service::class, function (Faker $faker) {
    return [
        'name' => $faker->userName,
        'slug' => $faker->userName,
        'short_description' => $faker->userName,
        'long_description' => $faker->userName,
        'image' => $faker->userName,
    ];
});
