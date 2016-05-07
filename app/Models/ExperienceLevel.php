<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ExperienceLevel
 * @package App\Models
 */
class ExperienceLevel extends Model
{
    use SoftDeletes;

    public $table = 'experience_levels';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'information'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'information' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'information' => 'required'
    ];
}
