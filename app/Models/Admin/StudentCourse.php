<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * Class StudentCourse
 * @package App\Models\Admin
 * @version April 06, 2019, 06:46 pm UTC
 */
class StudentCourse extends Model
{
    use SoftDeletes;

    public $table = 'student_courses';
    

    protected $dates = ['deleted_at'];


    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;


    public $fillable = [
        'student_id',
        'subject_id'

    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'student_id' => 'integer',
        'subject_id' => 'integer'

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
