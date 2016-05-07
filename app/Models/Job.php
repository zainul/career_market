<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Watson\Validating\ValidatingTrait;

/**
 * Class Job
 * @package App\Models
 */
class Job extends Model
{
    use SoftDeletes;

    use ValidatingTrait;

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
        'keyword',
        'company_id'
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
    protected $rules = [
        'currency_id' => 'required',
        'category_id' => 'required',
        'name' => 'required',
        'location_id' => 'required',
        'state' => 'required',
        'city' => 'required',
        'zip_code' => 'required',
        'brief_description' => 'required',
        'employment_type_id' => 'required',
        'job_requirement' => 'required',
        'benefit' => 'required',
        'industry_id' => 'required',
        'experience_level_id' => 'required',
        'functional_id' => 'required',
        'education_id' => 'required',
        'keyword' => 'required'
    ];

    public function currency() {
      return $this->belongsTo('App\Models\Currency');
    }

    public function category() {
      return $this->belongsTo('App\Models\Category');
    }

    public function location() {
      return $this->belongsTo('App\Models\Location');
    }

    public function employment_type() {
      return $this->belongsTo('App\Models\EmploymentType');
    }

    public function industry() {
      return $this->belongsTo('App\Models\Industry');
    }

    public function experience_level() {
      return $this->belongsTo('App\Models\ExperienceLevel');
    }

    public function functional() {
      return $this->belongsTo('App\Models\Functional');
    }

    public function education() {
      return $this->belongsTo('App\Models\Education');
    }

    public function company() {
      return $this->belongsTo('App\Models\Company');
    }

    public function applicants() {
      return $this->hasMany('App\Models\Applicant');
    }

    public function questions() {
      return $this->hasMany('App\Models\Question');
    }
}
