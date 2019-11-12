<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Person::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'mail' => $faker->unique()->safeEmail,
        'age' => $faker->numberBetween(1, 100),
    ];
});
