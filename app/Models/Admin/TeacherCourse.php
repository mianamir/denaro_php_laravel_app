<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * Class TeacherCourse
 * @package App\Models\Admin
 * @version March 2, 2019, 1:34 pm UTC
 */
class TeacherCourse extends Model
{
    use SoftDeletes;

    public $table = 'teacher_courses';
    

    protected $dates = ['deleted_at'];


    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;


    public $fillable = [
        'teacher_id',
        'course_id'

    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'teacher_id' => 'integer',
        'course_id' => 'integer'

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
//        'teacher_id' => 'required',
//        'course_id' => 'required',
//        'status' => 'required'
    ];

    
}
