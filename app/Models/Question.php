<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Question
 * @package App\Models
 */
class Question extends Model
{
    use SoftDeletes;

    public $table = 'questions';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'description',
        'job_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'description' => 'string',
        'job_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'description' => 'required',
        'job_id' => 'required'
    ];

    public function job() {
      return $this->belongsTo('App\Models\Job');
    }
}
