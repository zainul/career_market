<?php
// NewsTableSeeder.php
use Illuminate\Database\Seeder;
use App\Models\Education as Education; // to use Eloquent Model

class EducationTableSeeder extends Seeder {
    public function run() {
      
        Education::create( [
            'name' => 'bachelor degree'
        ] );

        Education::create( [
            'name' => 'master degree' ,
        ] );

        Education::create( [
            'name' => 'doctor' ,
        ] );

        Education::create( [
            'name' => 'senior high school' ,
        ] );
    }
}
