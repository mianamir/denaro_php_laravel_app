<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product
 * @package App\Models\Admin
 * @version October 11, 2017, 9:17 pm UTC
 */
class Product extends Model
{
    use SoftDeletes;

    public $table = 'products';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'ref_no',
        'type',
        'status',
        'estimated_time_arrival',
        'make',
        'model',
        'version',
        'color_ext',
        'color_int',
        'car_type',
        'engine_cc',
        'transmission',
        'chassis_type',
        'doors',
        'seats',
        'mileages',
        'registration_import',
        'availability',
        'image',
        'features',
       // 'pro_img_id',
        'is_fresh_arrival',
        'is_featured_stock'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ref_no' => 'string',
        'make' => 'string',
        'model' => 'string',
        'version' => 'string',
        'color_ext' => 'string',
        'color_int' => 'string',
        'car_type' => 'string',
        'engine_cc' => 'string',
        'transmission' => 'string',
        'chassis_type' => 'string',
        'doors' => 'string',
        'seats' => 'string',
        'mileages' => 'string',
        'registration_import' => 'string',
        'availability' => 'string',
        'image' => 'string',
        'features' => 'string',
        'pro_img_id' => 'integer',
        'is_fresh_arrival' => 'boolean',
        'is_featured_stock' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ref_no' => 'required',
        'make' => 'required',
        'model' => 'required',
        'version' => 'required',
        'color_ext' => 'required',
        'color_int' => 'required',
        'car_type' => 'required',
        'engine_cc' => 'required',
        'transmission' => 'required',
        'chassis_type' => 'required',
        'doors' => 'required',
        'seats' => 'required',
        'mileages' => 'required',
        'registration_import' => 'required',
        'availability' => 'required',
        'image' => 'required',
        'features' => 'required',
//        'pro_img_id' => 'required',
        'is_fresh_arrival' => 'required',
        'is_featured_stock' => 'required'
    ];

    
}
