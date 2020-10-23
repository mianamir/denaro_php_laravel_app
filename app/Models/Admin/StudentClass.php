<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class StudentClass
 * @package App\Models
 * @version January 21, 2019, 1:54 pm UTC
 */
class StudentClass extends Model
{
    use SoftDeletes;

    public $table = 'student_classes';
    

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
        return $this->belongsToMany('App\Models\Admin\Subject');
    }

    public function students()
    {
        return $this->hasMany('App\Models\Admin\Student');
    }

    
}
