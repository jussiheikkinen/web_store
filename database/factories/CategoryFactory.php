<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
      'name'=>'category_'.str_random(5),
      'main'=>1,
      'sub'=>0
    ];
});
