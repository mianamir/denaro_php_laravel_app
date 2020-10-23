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

class Banner extends Model
{
    use SoftDeletes;
    use SluggableScopeHelpers;


    public $table = 'banners';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'description',
        'button_text',
        'button_url',
        'background_image',
        'order_image',
        'image',
        'is_active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'description' => 'string',
        'button_text' => 'string',
        'button_url' => 'string',
        'background_image' => 'string',
        'image' => 'string',
        'is_active' => 'boolean',

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
