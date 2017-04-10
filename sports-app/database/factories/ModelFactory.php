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

$factory->define(App\Exercise::class, function (Faker\Generator $faker) {
    return [
        'user_id' => '16',
        'title' => $faker->sentence,
        'startTime' => $faker->dateTime,
        'exerciseTime' => $faker->numberBetween(20,87),
        'calories' => $faker->numberBetween(1000,5000),
        'spot' => $faker->streetName,
        'description' => $faker->sentence,
        'label' => $faker->colorName."#".$faker->colorName,
    ];
});
