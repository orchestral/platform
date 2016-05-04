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
        'email' => $faker->safeEmail,
        'password' => '$2y$10$m71Wj3Rv/05R2Pt1roDVGeHA2VeNluTqjTj2g8q61F4wGqbHvK9z.',
        'remember_token' => str_random(10),
        'status' => App\User::VERIFIED,
    ];
};
