<?php

$factory->define(App\Models\TeamMember::class, function ($faker) {
  $companies = App\Models\Company::lists('id')->all();
  $role = App\Models\Role::lists('id')->all();
  $users = App\User::where('role_id', $role[1])->get()->lists('id')->all();
  return [
    'user_id' => $faker->randomElement($users),
    'company_id' => $faker->randomElement($companies)
  ];
});
