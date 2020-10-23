<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Student
 * @package App\Models\Admin
 * @version March 30, 2019, 11:10 am UTC
 */
class Student extends Model
{
    use SoftDeletes;

    public $table = 'students';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'code',
        'profile_pic',
        'password',
        'password2',
        'status',
        'class_id',
        'father_name',
        'phone',
        'email',
        'gender',
        'country',
        'city',
        'type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'code' => 'integer',
        'profile_pic' => 'string',
        'password' => 'string',
        'password2' => 'string',
        'status' => 'string',
        'class_id' => 'string',
        'father_name' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'gender' => 'string',
        'country' => 'string',
        'city' => 'string',
        'type' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
//        'profile_pic' => 'required',
        'password' => 'required | min:6',
        'class_id' => 'required',
        'phone' => 'required',
        'gender' => 'required',
        'type' => 'required'
    ];

    public function student_class_func()
    {
        return $this->belongsTo('App\Models\Admin\StudentClass', 'class_id');
    }

    public function courses()
    {
        return $this->belongsToMany('App\Models\Admin\Subject', 'student_courses');
    }
    
}
