<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Expense
 * @package App\Models\Admin
 * @version March 4, 2018, 3:45 pm UTC
 */
class Expense extends Model
{
    use SoftDeletes;

    public $table = 'expenses';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'product_id',
        'name',
        'details',
        'type',
        'amount',
        'supplier_id',
        'employee',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'product_id' => 'integer',
        'name' => 'string',
        'details' => 'string',
        'type' => 'string',
        'amount' => 'double',
        'supplier_id' => 'integer',
        'employee' => 'integer',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
//        'product_id' => 'required',
        'name' => 'required',
        'details' => 'required',
        'type' => 'required',
        'amount' => 'required',
//        'supplier_id' => 'required',
//        'employee' => 'required',
//        'status' => 'required'
    ];

    
}
