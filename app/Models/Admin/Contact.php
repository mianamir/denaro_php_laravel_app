<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contact
 * @package App\Models\Admin
 * @version July 28, 2017, 10:49 am UTC
 */
class Contact extends Model
{
    use SoftDeletes;

    public $table = 'contacts';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'address',
        'email',
        'phone1',
        'phone2',
        'phone3',
        'phone4',
        'fax',
        'postal',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'address' => 'string',
        'email' => 'string',
        'phone1' => 'string',
        'phone2' => 'string',
        'phone3' => 'string',
        'phone4' => 'string',
        'fax' => 'string',
        'postal' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
//        'title' => 'required',
//        'address' => 'required',
//        'email' => 'required',
//        'phone1' => 'required',
//        'phone2' => 'required',
//        'phone3' => 'required'
//        'image' => 'required'
    ];

    
}
