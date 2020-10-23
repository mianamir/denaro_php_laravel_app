<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Certification
 * @package App\Models\Admin
 * @version May 29, 2017, 1:55 pm UTC
 */
class Certification extends Model
{
    use SoftDeletes;

    public $table = 'certifications';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'image' => 'required'
    ];

    
}
