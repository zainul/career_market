<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Company
 * @package App\Models
 */
class Company extends Model
{
    use SoftDeletes;

    public $table = 'companies';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'slug',
        'website',
        'address',
        'logo',
        'overview',
        'facebook',
        'linkedin'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'slug' => 'string',
        'website' => 'string',
        'address' => 'string',
        'logo' => 'string',
        'overview' => 'string',
        'facebook' => 'string',
        'linkedin' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];
}
