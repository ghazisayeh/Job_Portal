<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'fn' => $faker->name,
        'ln' =>$faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'adresse' => $faker->address,
        'phno' => $faker->phoneNumber,
        'current_location' => $faker->address,
        'annual_salary' => $faker->numberBetween($min = 1000, $max = 9000),
        'pic' => 'https://picsum.photos/200',
        'type' => $faker->numberBetween($min = 1, $max = 2),
        
    ];
});
