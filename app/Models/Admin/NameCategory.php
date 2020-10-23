<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class NameCategory
 * @package App\Models\Admin
 * @version March 11, 2017, 1:46 pm UTC
 */
class NameCategory extends Model
{
    use SoftDeletes;

    public $table = 'name_categories';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name_ar',
        'name_ar',
        'url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name_ar' => 'string',
        'name_ar' => 'string',
        'url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name_ar' => 'required',
        'name_ar' => 'required',
        'url' => 'required'
    ];

    
}
