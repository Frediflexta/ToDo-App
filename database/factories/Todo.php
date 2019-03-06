<?php

use App\Todo;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Todo::class, function (Faker $faker) {
    return [
        'todo' => $faker->sentence(10)
    ];
});
