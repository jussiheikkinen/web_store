<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
      'name'=>str_random(10),
      'description'=>str_random(100),
      'price'=>rand(10,100),
      'manufacturer'=>str_random(30),
      ];
});
