<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'stu_fName' => $faker->sentence(2),
        'stu_lName' => $faker->sentence(2),
        'email' => $faker->sentence(2),
        'password'=>$faker->sentence(2),
        'gender'=>$faker->sentence(2),
        'phone'=>$faker->sentence(2),
        'batch'=>$faker->sentence(2),
        'specialezation'=>$faker->sentence(2),
        'avatar'=>$faker->sentence(2),
        'coverLetter'=>$faker->sentence(2),
        'ciriculumnVitea'=>$faker->sentence(2),
    ];
});
