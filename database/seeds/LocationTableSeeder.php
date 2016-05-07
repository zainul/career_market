<?php
// NewsTableSeeder.php
use Illuminate\Database\Seeder;
use App\Models\Location as Location; // to use Eloquent Model

class LocationTableSeeder extends Seeder {
    public function run() {
      
        Location::create( [
            'name' => 'Indonesian'
        ] );

        Location::create( [
            'name' => 'Singapore' ,
        ] );

        Location::create( [
            'name' => 'Malaysian' ,
        ] );

        Location::create( [
            'name' => 'Thailand' ,
        ] );

        Location::create( [
            'name' => 'No Location' ,
        ] );
    }
}
