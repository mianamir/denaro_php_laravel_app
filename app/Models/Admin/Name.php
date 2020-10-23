<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Name
 * @package App\Models\Admin
 * @version March 11, 2017, 2:33 pm UTC
 */
class Name extends Model
{
    use SoftDeletes;

    public $table = 'names';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'english',
        'type',
        'lang',
        'meaning',
        'name_category_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'english' => 'string',
        'type' => 'string',
        'lang' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'english' => 'required',
        'lang' => 'required',
        'name_category_id' => 'required'
    ];

    
}
