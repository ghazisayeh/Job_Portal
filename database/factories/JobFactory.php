<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Job;
use App\Category;
use App\Employer;
use Faker\Generator as Faker;

$factory->define(Job::class, function (Faker $faker) {
    return [
        //'user_id' => $factory->create(App\User::class)->id,
        'j_category' => Category::get('id')->random(),
        'j_owner' => Employer::get('id')->random(),
        'j_title' => $faker->jobTitle,
        'j_hours' =>$faker->numberBetween($min = 6, $max = 8),
        'j_salary' =>$faker->numberBetween($min = 1000, $max = 9999),
        'j_discription' => $faker->text($maxNbChars = 100) ,
        'j_location' => $faker->streetAddress,
        'j_active' => $faker->boolean ,
        'created_at' => now(),
        'updated_at' => now()
        
    
    ];
});
