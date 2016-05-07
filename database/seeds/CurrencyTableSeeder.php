<?php
// NewsTableSeeder.php
use Illuminate\Database\Seeder;
use App\Models\Currency as Currency; // to use Eloquent Model

class CurrencyTableSeeder extends Seeder {
    public function run() {
      
        Currency::create( [
            'name' => 'S$'
        ] );

        Currency::create( [
            'name' => 'IDR' ,
        ] );

        Currency::create( [
            'name' => 'USD$' ,
        ] );

        Currency::create( [
            'name' => 'AUD$' ,
        ] );

        Currency::create( [
            'name' => 'RM' ,
        ] );
    }
}
