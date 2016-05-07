<?php
// NewsTableSeeder.php
use Illuminate\Database\Seeder;
use App\Models\Role as Role; // to use Eloquent Model

class RoleTableSeeder extends Seeder {
    public function run() {
        // clear table
        Role::truncate();
        // add 1st row
        Role::create( [
            'name' => 'applicant'
        ] );
        // add 2nd row
        Role::create( [
            'name' => 'employeer' ,
        ] );
    }
}
