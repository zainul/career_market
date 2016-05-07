<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Answer
 * @package App\Models
 */
class Answer extends Model
{
    use SoftDeletes;

    public $table = 'answers';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'applicant_id',
        'question_id',
        'answer'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'applicant_id' => 'integer',
        'question_id' => 'integer',
        'answer' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'applicant_id' => 'required',
        'question_id' => 'required',
        'answer' => 'required'
    ];

    public function applicant() {
      return $this->belongsTo('App\Models\Applicant');
    }

    public function question() {
      return $this->belongsTo('App\Models\Question');
    }
}
