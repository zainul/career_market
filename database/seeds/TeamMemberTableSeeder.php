<?php
// NewsTableSeeder.php
use Illuminate\Database\Seeder;
use App\Models\TeamMember as TeamMember; // to use Eloquent Model

class TeamMemberTableSeeder extends Seeder {
    public function run() {

        TeamMember::create( [
            'name' => 'S$'
        ] );

        TeamMember::create( [
            'name' => 'IDR' ,
        ] );

        TeamMember::create( [
            'name' => 'USD$' ,
        ] );

        TeamMember::create( [
            'name' => 'AUD$' ,
        ] );

        TeamMember::create( [
            'name' => 'RM' ,
        ] );
    }
}
