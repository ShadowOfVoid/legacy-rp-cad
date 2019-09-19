<?php

/** @var Factory $factory */

use App\Warrant;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Facades\Date;

$factory->define(Warrant::class, function (Faker $faker) {
    return [
        'processed'  => false,
        'expires_at' => Date::tomorrow(),
    ];
});
