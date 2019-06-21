<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Faker\Generator as Faker;
use App\User;

$factory->define(Post::class, function (Faker $faker) {
    $listUserId= User::pluck('id');
    return [
        'content' => $faker->text,
        'user_id' => $faker->randomElement($listUserId)
    ];
});
