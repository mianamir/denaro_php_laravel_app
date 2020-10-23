<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Header
 * @package App\Models\Admin
 * @version October 9, 2017, 12:00 pm UTC
 */
class Header extends Model
{
    use SoftDeletes;

    public $table = 'headers';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'logo',
        'image1',
        'image2',
        'phone',
        'url',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'logo' => 'string',
        'image1' => 'string',
        'image2' => 'string',
        'url' => 'string',
        'phone' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
//        'logo' => 'required',
//        'image1' => 'required',
//        'image2' => 'required',
//        'phone' => 'required',
//        'email' => 'required'
    ];

    
}
