<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Shoe;

$factory->define(Shoe::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => mt_rand(1, 500),
        'description' => Str::random(10),
    ];
});
