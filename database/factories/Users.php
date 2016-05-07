<?php

$factory->define(App\User::class, function ($faker) {

  return [
    'name' => 'zainulmasadi',
    'lastname' => 'zainul',
    'firstname' => 'masadi',
    'phone' => '081333241990',
    'email' => 'zainul@career.com',
    'password' => bcrypt('12345678')
  ];
});
