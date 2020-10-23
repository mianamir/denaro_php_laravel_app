<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Purchase
 * @package App\Models\Admin
 * @version February 27, 2018, 6:24 pm UTC
 */
class Purchase extends Model
{
    use SoftDeletes;

    public $table = 'purchases';
    

    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at'
       // 'purchase_date'
    ];



    public $fillable = [
        'purchase_date',
        'supplier_id',
        'product_id',
        'total_amount',
        'status',
        'purchase_no'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'purchase_no' => 'integer',
        'supplier_id' => 'integer',
        'product_id' => 'integer',
        'total_amount' => 'double',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
//        'purchase_no' => 'required',
        'purchase_date' => 'required',
        'supplier_id' => 'required',
        'product_id' => 'required'
       // 'total_amount' => 'required'

//        'status' => 'required'
    ];

    //protected $dateFormat = 'Y-m-d H:i';
    
}
