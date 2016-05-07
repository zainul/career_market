<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EducationalBackground
 * @package App\Models
 */
class EducationalBackground extends Model
{
    use SoftDeletes;

    public $table = 'educational_backgrounds';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'school',
        'field_study',
        'start',
        'end',
        'user_id',
        'education_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'school' => 'string',
        'field_study' => 'string',
        'user_id' => 'integer',
        'education_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'school' => 'required'
    ];
}
