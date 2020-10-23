<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Demo
 * @package App\Models
 * @version May 12, 2017, 2:46 pm UTC
 */
class Demo extends Model
{
    use SoftDeletes;

    public $table = 'demos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'email',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required'
    ];

    
}
