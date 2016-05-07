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
      DB::statement("TRUNCATE TABLE answers");
      DB::statement("TRUNCATE TABLE questions CASCADE");
      DB::statement("TRUNCATE TABLE jobs CASCADE");
      DB::statement("TRUNCATE TABLE categories CASCADE");
      DB::statement("TRUNCATE TABLE profiles");
      DB::statement("TRUNCATE TABLE currencies CASCADE");
      DB::statement("TRUNCATE TABLE experience_levels CASCADE");
      DB::statement("TRUNCATE TABLE functionals CASCADE");
      DB::statement("TRUNCATE TABLE industries CASCADE");
      DB::statement("TRUNCATE TABLE locations CASCADE");
      $this->call( 'RoleTableSeeder' );
      $this->call( 'CategoryTableSeeder' );
      $this->call( 'CurrencyTableSeeder' );
      $this->call( 'EducationTableSeeder' );
      $this->call( 'EmploymentTypeTableSeeder' );
      $this->call( 'ExperienceLevelTableSeeder' );
      $this->call( 'FunctionalTableSeeder' );
      $this->call( 'IndustryTableSeeder' );
      $this->call( 'LocationTableSeeder' );
      factory('App\Models\Company', 10)->create();
      factory('App\User', 1)->create();
      Model::reguard();
    }
}
