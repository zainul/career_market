<?php
// NewsTableSeeder.php
use Illuminate\Database\Seeder;
use App\Models\ExperienceLevel as ExperienceLevel; // to use Eloquent Model

class ExperienceLevelTableSeeder extends Seeder {
    public function run() {

        ExperienceLevel::create( [
            'name' => 'Fresh Graduate',
            'information' => 'Must have portofolio'
        ] );

        ExperienceLevel::create( [
            'name' => 'Junior' ,
            'information' => 'Min experience 1 year'
        ] );

        ExperienceLevel::create( [
            'name' => 'Middle' ,
            'information' => 'Min experience 2 year'
        ] );

        ExperienceLevel::create( [
            'name' => 'Senior' ,
            'information' => 'Min experience 3 year'
        ] );

        ExperienceLevel::create( [
            'name' => 'Master' ,
            'information' => 'Min experience more than 6 year inrelated field job'
        ] );
    }
}
