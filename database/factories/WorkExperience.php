<?php

$factory->define(App\Models\WorkExperience::class, function ($faker) {

  $role = App\Models\Role::lists('id')->all();
  $users = App\User::where('role_id', $role[0])->get()->lists('id')->all();

  $field = array('IT', 'Bussines Management', 'IS', 'Design', 'Marketing');
  return [
    'company_name' => $faker->company,
    'position' => $faker->randomElement($field),
    'start' => $faker->dateTimeThisDecade($max = 'now'),
    'end' => $faker->dateTimeThisDecade($max = 'now'),
    'still_working' => false,
    'location' => $faker->address,
    'user_id' => $faker->randomElement($users),
    'description' => $faker->text
  ];
});
