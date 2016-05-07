<?php
// NewsTableSeeder.php
use Illuminate\Database\Seeder;
use App\Models\Category as Category; // to use Eloquent Model

class CategoryTableSeeder extends Seeder {
    public function run() {
        // clear table

        Category::create( [
            'name' => 'fulltime'
        ] );

        Category::create( [
            'name' => 'fulltime remote' ,
        ] );

        Category::create( [
            'name' => 'part time' ,
        ] );

        Category::create( [
            'name' => 'part time remote' ,
        ] );

        Category::create( [
            'name' => 'internship' ,
        ] );
    }
}
