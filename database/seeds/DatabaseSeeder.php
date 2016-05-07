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
      $this->call( 'RoleTableSeeder' );
      factory('App\Models\Company', 10)->create();
      factory('App\User', 1)->create();
      Model::reguard();
    }
}
