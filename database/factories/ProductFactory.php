<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
      'name'=>'product_'.str_random(10),
      'description'=>'product_'.str_random(100),
      'price'=>rand(10,100),
      'manufacturer'=>str_random(30).'_inc',
      ];
});
