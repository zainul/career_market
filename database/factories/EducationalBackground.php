<?php

$factory->define(App\Models\EducationalBackground::class, function ($faker) {

  $role = App\Models\Role::lists('id')->all();
  $users = App\User::where('role_id', $role[0])->get()->lists('id')->all();
  $educations = App\Models\Education::lists('id')->all();

  $field = array('IT', 'Bussines Management', 'IS', 'Design', 'Marketing');
  return [
    'school' => $faker->company,
    'field_study' => $faker->randomElement($field),
    'start' => $faker->dateTimeThisDecade($max = 'now'),
    'end' => $faker->dateTimeThisDecade($max = 'now'),
    'user_id' => $faker->randomElement($users),
    'education_id' => $faker->randomElement($educations)
  ];
});
