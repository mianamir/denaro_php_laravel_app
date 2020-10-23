<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Map
 * @package App\Models\Admin
 * @version November 9, 2016, 6:30 am UTC
 */
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Map extends Model
{
    use SoftDeletes;

    public $table = 'maps';
    use SluggableScopeHelpers;



    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'image',
        'order',
        'published'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'image' => 'string',
        'order' => 'integer',
        'published' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
