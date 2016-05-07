<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Model::unguard();
      factory('App\User', 1)->create();
      factory('App\Models\Company', 10)->create();
      Model::reguard();
    }
}
