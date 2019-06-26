<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
  return [
    'name' => $faker->name(),
    'description' => $faker->paragraph(),
    'price' => $faker->randomFloat(9, 2, 80),
    'size' => $faker->randomElement(['xs','s','m','l','xl']),  
    'is_visible' => $faker->boolean(50),
    'status' => $faker->randomElement(['solde', 'standard']),
  ];
});

