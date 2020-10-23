<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class HomeGallery
 * @package App\Models\Admin
 * @version May 29, 2017, 10:28 am UTC
 */
class HomeGallery extends Model
{
    use SoftDeletes;

    public $table = 'home_galleries';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'image',
        'order_image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'image' => 'string',
        'order_image' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'image' => 'required',
        'order_image' => 'required'
    ];

    
}
