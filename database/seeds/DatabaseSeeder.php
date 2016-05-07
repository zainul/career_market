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
      DB::statement("TRUNCATE TABLE work_experiences");
      DB::statement("TRUNCATE TABLE educational_backgrounds");
      DB::statement("TRUNCATE TABLE users CASCADE");
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
      factory('App\User', 20)->create();
      factory('App\Models\Profile', 7)->create();
      factory('App\Models\TeamMember', 7)->create();
      factory('App\Models\EducationalBackground', 60)->create();
      factory('App\Models\WorkExperience', 60)->create();
      Model::reguard();
    }
}
