<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Suppier
 * @package App\Models\Admin
 * @version February 27, 2018, 4:06 pm UTC
 */
class Suppier extends Model
{
    use SoftDeletes;

    public $table = 'suppiers';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'email',
        'phone',
        'image',
        'address',
        'city',
        'counry'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'phone' => 'string',
        'address' => 'string',
        'city' => 'string',
        'country' => 'string',
        'total_amount' => 'double',
        'remaining_amount' => 'double',
        'image' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'address' => 'required',
        'city' => 'required',
        'country' => 'required',
   //     'total_amount' => 'required',
     //   'remaining_amount' => 'required',
//        'image' => 'required',
     //   'status' => 'required'
    ];

    
}
