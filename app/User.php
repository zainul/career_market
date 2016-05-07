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

    public function work_experiences() {
      return $this->hasOne('App\Models\Profile');
    }
}
