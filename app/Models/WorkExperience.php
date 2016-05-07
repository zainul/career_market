<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class WorkExperience
 * @package App\Models
 */
class WorkExperience extends Model
{
    use SoftDeletes;

    public $table = 'work_experiences';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'company_name',
        'position',
        'start',
        'end',
        'still_working',
        'location',
        'description',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'company_name' => 'string',
        'position' => 'string',
        'start' => 'string',
        'end' => 'string',
        'still_working' => 'boolean',
        'location' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'company_name' => 'required'
    ];

    public function user() {
      return $this->belongsTo('App\User');
    }
}
