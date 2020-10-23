<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PayRoll
 * @package App\Models\Admin
 * @version March 4, 2018, 9:02 am UTC
 */
class PayRoll extends Model
{
    use SoftDeletes;

    public $table = 'pay_rolls';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'employee_id',
        'salary',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'employee_id' => 'integer',
        'salary' => 'double',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'employee_id' => 'required',
        'salary' => 'required',
//        'status' => 'required'
    ];

    
}
