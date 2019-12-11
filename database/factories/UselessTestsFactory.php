<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\UselessTest;
use Faker\Generator as Faker;

$factory->define(UselessTest::class, function (Faker $faker) {
    return [
        'name' => $faker->text,
        'created_at' => $faker->dateTime->getTimestamp(),
        'updated_at' => $faker->dateTime->getTimestamp()
    ];
});
