<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ClientReview
 * @package App\Models\Admin
 * @version October 9, 2017, 1:15 pm UTC
 */
class ClientReview extends Model
{
    use SoftDeletes;

    public $table = 'client_reviews';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'image',
        'name',
        'detail'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'image' => 'string',
        'name' => 'string',
        'detail' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
//        'image' => 'required',
        'name' => 'required',
        'detail' => 'required'
    ];

    
}
