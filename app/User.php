<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'firstname', 'lastname', 'phone', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role() {
      return $this->belongsTo('App\Models\Role');
    }

    public function work_experiences() {
      return $this->hasMany('App\Models\WorkExperience');
    }

    public function educational_backgrounds() {
      return $this->hasMany('App\Models\EducationalBackground');
    }

    public function profiles() {
      return $this->hasOne('App\Models\Profile');
    }

    public function company() {
      $company = User::join('team_members', 'team_members.user_id', '=', 'users.id')
                      ->join('companies', 'companies.id', '=', 'team_members.company_id')
                      ->select('companies.*')
                      ->where('users.id', $this->id)
                      ->get();

      return $company;
    }

    public function isTeamMember() {
      if (count($this->company()) > 0){
        return true;
      }else{
        return false;
      }
    }
}
