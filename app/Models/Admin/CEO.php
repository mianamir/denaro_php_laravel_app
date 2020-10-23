<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CEO
 * @package App\Models\Admin
 * @version June 7, 2017, 1:31 pm UTC
 */
class CEO extends Model
{
    use SoftDeletes;

    public $table = 'c_e_o_s';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'image',
        'details'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'image' => 'string',
        'details' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'image' => 'required',
        'details' => 'required'
    ];

    
}
