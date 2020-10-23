<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SocialIcon
 * @package App\Models\Admin
 * @version June 7, 2017, 1:54 pm UTC
 */
class SocialIcon extends Model
{
    use SoftDeletes;

    public $table = 'social_icons';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
//        'name' => 'required',
        'url' => 'required'
    ];

    
}
