<?php
// NewsTableSeeder.php
use Illuminate\Database\Seeder;
use App\Models\Industry as Industry; // to use Eloquent Model

class IndustryTableSeeder extends Seeder {
    public function run() {
      
        Industry::create( [
            'name' => 'Human Resource'
        ] );

        Industry::create( [
            'name' => 'Transportation' ,
        ] );

        Industry::create( [
            'name' => 'E-Commerce' ,
        ] );

        Industry::create( [
            'name' => 'Consultant' ,
        ] );

        Industry::create( [
            'name' => 'Marketing' ,
        ] );
    }
}
