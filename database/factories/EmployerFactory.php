<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employer;
use Faker\Generator as Faker;

$factory->define(Employer::class, function (Faker $faker) {
    return [
        'er_fn' => $faker->name , 
        'er_ln' => $faker->lastName,
        'email' =>$faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'er_adresse' => $faker->address ,
        'er_phno' => $faker->phoneNumber,
        'er_company' => $faker->company,
        'er_pic' => 'https://picsum.photos/200',
        'er_password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'created_at' => now(),
        'updated_at' => now()
    ];
});
