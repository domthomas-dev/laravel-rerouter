<?php

use Faker\Generator as Faker;
use Thomasdominic\LaravelRerouter\Models\RerouteUrl;

$factory->define(RerouteUrl::class, function (Faker $faker) {
    return [
        'from' => $faker->url,
        'to' => $faker->url,
        'status_code' => $faker->randomElement(['301','302','410']),
        'comment' => $faker->text(),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});
