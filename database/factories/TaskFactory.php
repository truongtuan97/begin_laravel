<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'title' => substr($faker->sentence(2), 0, -1),
        'body' => $faker->sentence,
    ];
});
