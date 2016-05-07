<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Job
 * @package App\Models
 */
class Job extends Model
{
    use SoftDeletes;

    public $table = 'jobs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'currency_id',
        'category_id',
        'name',
        'location_id',
        'state',
        'city',
        'zip_code',
        'type_id',
        'brief_description',
        'employment_type_id',
        'job_requirement',
        'benefit',
        'industry_id',
        'experience_level_id',
        'min_salary',
        'max_salary',
        'functional_id',
        'education_id',
        'keyword'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'currency_id' => 'integer',
        'category_id' => 'integer',
        'name' => 'string',
        'location_id' => 'integer',
        'state' => 'string',
        'city' => 'string',
        'zip_code' => 'string',
        'type_id' => 'integer',
        'brief_description' => 'string',
        'employment_type_id' => 'integer',
        'job_requirement' => 'string',
        'benefit' => 'string',
        'industry_id' => 'integer',
        'experience_level_id' => 'integer',
        'min_salary' => 'integer',
        'max_salary' => 'integer',
        'functional_id' => 'integer',
        'education_id' => 'integer',
        'keyword' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'currency_id' => 'required'
    ];
}
