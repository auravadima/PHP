<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Test;
use Faker\Generator as Faker;

$factory->define(Test::class, function (Faker $faker) {
    return [
        'text' => $faker->text,
        'is_enabled' => $faker->boolean,
        'created_at' => $faker->dateTime->getTimestamp(),
        'updated_at' => $faker->dateTime->getTimestamp()
    ];
});
