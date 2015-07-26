<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory[App\User::class] = function (Faker\Generator $faker) {
    return [
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
        'status' => App\User::VERIFIED,
    ];
};
