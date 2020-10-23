<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Download
 * @package App\Models\Admin
 * @version May 29, 2017, 12:00 pm UTC
 */
class Download extends Model
{
    use SoftDeletes;

    public $table = 'downloads';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'file'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'file' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'file' => 'required'
    ];

    
}
