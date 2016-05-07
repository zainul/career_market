<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Applicant
 * @package App\Models
 */
class Applicant extends Model
{
    use SoftDeletes;

    public $table = 'applicants';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'job_id',
        'cover_letter',
        'reason'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
        'job_id' => 'integer',
        'cover_letter' => 'string',
        'reason' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'job_id' => 'required',
        'cover_letter' => 'required',
        'reason' => 'required'
    ];

    public function user() {
      return $this->belongsTo('App\User');
    }

    public function job() {
      return $this->belongsTo('App\Models\Job');
    }
}
