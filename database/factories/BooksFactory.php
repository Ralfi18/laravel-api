<?php

use Faker\Generator as Faker;

$factory->define(App\Books::class, function (Faker $faker) {
    return [
    	'title' => $faker->title,
    	'author' => $faker->author,
    ];
});
