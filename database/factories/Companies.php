<?php

$factory->define(App\Models\Company::class, function ($faker) {

  return [
    'name' => $faker->company,
    'slug' => $faker->slug,
    'website' => $faker->url,
    'address' => $faker->address,
    'logo' => $faker->imageUrl($width = 640, $height = 480),
    'overview' => $faker->text($maxNbChars = 500),
    'facebook' => $faker->url,
    'linkedin' => $faker->url
  ];
});
