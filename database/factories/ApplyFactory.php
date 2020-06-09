<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Apply;
use App\Job;
use App\User;
use Faker\Generator as Faker;

$factory->define(Apply::class, function (Faker $faker) {
    return [
    'id_u' => User::get('id')->random(),
    'id_j' => Job::get('id')->random(),
    'text' => $faker->text($maxNbChars = 255),
    'created_at' => now(),
    'updated_at' => now()
    ];
});
