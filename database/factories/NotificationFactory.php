<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Notification;
use App\User;
use Faker\Generator as Faker;

$factory->define(Notification::class, function (Faker $faker) {
    return [
        'id_user' => User::get('id')->random(),
        'notificationcontent' => $faker->text($maxNbChars = 255),
        'created_at' => now(),
        'updated_at' => now()
    ];
});
