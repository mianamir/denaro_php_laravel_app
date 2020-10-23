<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

/**
 * Class Location
 * @package App\Models\Admin
 * @version November 8, 2016, 9:01 pm UTC
 */
class Location extends Model
{
    use SoftDeletes;
    use SluggableScopeHelpers;


    public $table = 'locations';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'image',
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
