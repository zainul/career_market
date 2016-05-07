<?php
$factory->define(App\User::class, function ($faker) {
  $role = App\Models\Role::lists('id')->all();
  return [
    'name' => $faker->userName,
    'lastname' => $faker->lastName,
    'firstname' =>  $faker->firstName($gender = null|'male'|'female'),
    'phone' => $faker->phoneNumber,
    'email' => $faker->email,
    'password' => bcrypt('12345678'),
    'role_id' => $faker->randomElement($role)
  ];
});
