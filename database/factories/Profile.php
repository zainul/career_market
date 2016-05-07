<?php

$factory->define(App\Models\Profile::class, function ($faker) {
  $currencies = App\Models\Currency::lists('id')->all();
  $role = App\Models\Role::lists('id')->all();
  $users = App\User::where('role_id', $role[0])->get()->lists('id')->all();
  return [
    'user_id' => $faker->randomElement($users),
    'current_salary' => $faker->numberBetween($min = 1000, $max = 4000),
    'currency_id' => $faker->randomElement($currencies),
    'min_expected_salary' => $faker->numberBetween($min = 4000, $max = 70000),
    'max_expected_salary' => $faker->numberBetween($min = 7000, $max = 10000),
    'facebook' => $faker->url,
    'linkedin' => $faker->url,
    'github' => $faker->url
  ];
});
