<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Cat;
use App\Breed;
use Faker\Generator as Faker;

$factory->define(Cat::class, function (Faker $faker) {
	$listBreedIds= Breed::pluck('id');
    return [
        'name' => $faker->name,
        'age' => rand(1,10),
        'breed_id' => $faker->randomElement($listBreedIds)

    ];
});
