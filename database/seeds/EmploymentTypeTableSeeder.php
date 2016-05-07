<?php
// NewsTableSeeder.php
use Illuminate\Database\Seeder;
use App\Models\EmploymentType as EmploymentType; // to use Eloquent Model

class EmploymentTypeTableSeeder extends Seeder {
    public function run() {
      
        EmploymentType::create( [
            'name' => 'permanent'
        ] );

        EmploymentType::create( [
            'name' => 'contract' ,
        ] );

        EmploymentType::create( [
            'name' => 'freelance' ,
        ] );
    }
}
