<?php

/** @var Factory $factory */

use App\Car;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'name'          => $faker->company,
        'plate'         => strtoupper($faker->text(6)),
        'hash'          => $faker->md5,
        'garage'        => $faker->streetName,
        'state'         => $faker->randomElement([ 'In', 'Out' ]),
        'fuel'          => $faker->randomFloat(1, 0, 1),
        'supporter'     => $faker->boolean,
        'damage'        => [],
        'modifications' => []
    ];
});
