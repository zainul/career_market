<?php
// NewsTableSeeder.php
use Illuminate\Database\Seeder;
use App\Models\Functional as Functional; // to use Eloquent Model

class FunctionalTableSeeder extends Seeder {
    public function run() {
      
        Functional::create( [
            'name' => 'Web Developer'
        ] );

        Functional::create( [
            'name' => 'Graphic Designer' ,
        ] );

        Functional::create( [
            'name' => 'CTO' ,
        ] );

        Functional::create( [
            'name' => 'Copy Writer' ,
        ] );

        Functional::create( [
            'name' => 'Marketing' ,
        ] );

        Functional::create( [
            'name' => 'Data Scientist' ,
        ] );

        Functional::create( [
            'name' => 'Mobile Dev' ,
        ] );

        Functional::create( [
            'name' => 'Bussines Development' ,
        ] );
    }
}
