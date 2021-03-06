<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $name = $faker->words(3, true);
    return [
        'name' => $name,
        'slug' => Str::slug($name, '-'),
        'img' => 'https://loremflickr.com/320/240'
        'price' => $faker->randomFloat(null, 0, 10000),
        'description' => $facer->realText(),
        'recommended' => $facer->numberBetween(0, 1),
        'category_id' => $facer->numberBetween(1, 3),

    ];
});
