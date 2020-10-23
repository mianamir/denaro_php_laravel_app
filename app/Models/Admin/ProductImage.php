<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Banner
 * @package App\Models\Admin
 * @version November 8, 2016, 6:55 pm UTC
 */
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class ProductImage extends Model
{
    use SoftDeletes;
    use SluggableScopeHelpers;


    public $table = 'product_images';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'image',
        'p_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */


    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
