<?php

/** @var Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(User::class, function (Faker $faker) {

    // Just use a static avatar for all fake users.
    $avatar = 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/e1/e139eec729031ced290d1130f164622de73c3f7a_full.jpg';

    return [
        'account_id' => $faker->numberBetween(10000000000, 100000000000),
        'name'       => $faker->name,
        'avatar'     => $avatar,
        'api_token'  => $faker->uuid
    ];
});
