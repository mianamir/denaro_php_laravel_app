<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Teacher
 * @package App\Models\Admin
 * @version February 20, 2019, 6:28 am UTC
 */
class Teacher extends Model
{
    use SoftDeletes;

    public $table = 'teachers';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'fathername',
        'contact1',
        'contact2',
        'email',
        'qualificatioon',
        'course_to_teach_id',
        'experience',
        'username',
        'password',
        'password2',
        'teacher_code',
        'country',
        'city',
        'profile_pic',
        'cnic',
        'status',
        'payment_plan_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'fathername' => 'string',
        'contact1' => 'string',
        'contact2' => 'string',
        'email' => 'string',
        'qualificatioon' => 'string',
        'course_to_teach_id' => 'integer',
        'experience' => 'string',
        'username' => 'string',
        'password' => 'string',
        'password2' => 'string',
        'teacher_code' => 'string',
        'country' => 'string',
        'city' => 'string',
        'profile_pic' => 'string',
        'cnic' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'fathername' => 'required',
        'contact1' => 'required',
        'email' => 'required',
        'qualificatioon' => 'required',
//        'course_to_teach_id' => 'required',
        'experience' => 'required',
        'username' => 'required',
        'password' => 'required | min:6',
        'country' => 'required',
        'city' => 'required',
//        'payment_plan_id' => 'required'

//        'profile_pic' => 'required',
//        'cnic' => 'required'
    ];


    public function payment_plan()
    {
        return $this->belongsTo('App\Models\Admin\PaymentPlan');
    }

//    public function courses()
//    {
//        return $this->belongsToMany('App\Models\Admin\Subject', 'teacher_courses','teacher_id','course_id')->withPivot('teacher_id', 'course_id');
//    }

    public function course_to_teach()
    {
        return $this->belongsTo('App\Models\Admin\CourseToTeach');
    }
}
