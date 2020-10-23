<?php

namespace App\Models;

use Eloquent as Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class HomeGallery
 * @package App\Models
 * @version May 29, 2017, 10:26 am UTC
 */
class HomeGallery extends Model
{
//    use SoftDeletes;

    public $table = 'home_galleries';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required'
    ];

    
}
