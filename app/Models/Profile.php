<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Profile
 * @package App\Models
 */
class Profile extends Model
{
    use SoftDeletes;

    public $table = 'profiles';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'linkedin',
        'facebook',
        'github',
        'current_salary',
        'currency_id',
        'min_expected_salary',
        'max_expected_salary',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'linkedin' => 'string',
        'facebook' => 'string',
        'github' => 'string',
        'current_salary' => 'integer',
        'currency_id' => 'integer',
        'min_expected_salary' => 'integer',
        'max_expected_salary' => 'integer',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'linkedin' => 'required'
    ];
}
