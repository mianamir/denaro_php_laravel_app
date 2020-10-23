<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SubjectType
 * @package App\Models\Admin
 * @version January 24, 2019, 10:55 am UTC
 */
class SubjectType extends Model
{
    use SoftDeletes;

    public $table = 'subject_types';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title'
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


    public function subjects()
    {
        return $this->hasMany('App\Models\Admin\Subject', 'subject_type_id');
    }


    
}
