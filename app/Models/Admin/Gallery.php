<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Gallery
 * @package App\Models\Admin
 * @version November 9, 2016, 7:30 am UTC
 */
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Gallery extends Model
{
    use SoftDeletes;
    use SluggableScopeHelpers;


    public $table = 'galleries';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'image'

    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
