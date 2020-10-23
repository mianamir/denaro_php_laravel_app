<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Sale
 * @package App\Models\Admin
 * @version March 3, 2018, 5:30 am UTC
 */
class Sale extends Model
{
    use SoftDeletes;

    public $table = 'sales';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'sale_date',
        'customer_id',
        'product_id',
        'no_of_items',
        'sale_price',
        'discount',
        'total_amount',
        'remaining_amount'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'sale_no' => 'integer',
        'customer_id' => 'integer',
        'product_id' => 'integer',
        'no_of_items' => 'integer',
        'discount' => 'integer',
        'total_amount' => 'double',
        'sale_price' => 'double',
        'remaining_amount' => 'double',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
//        'sale_no' => 'required',
        'sale_date' => 'required',
        'customer_id' => 'required',
        'product_id' => 'required',
        'no_of_items' => 'required',
//        'total_amount' => 'required',
//        'remaining_amount' => 'required',
//        'status' => 'required'
    ];

    
}
