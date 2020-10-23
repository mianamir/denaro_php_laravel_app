<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Subject
 * @package App\Models\Admin
 * @version January 21, 2019, 2:43 pm UTC
 */
class Subject extends Model
{
    use SoftDeletes;

    public $table = 'subjects';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'code',
        'course_type',
        'subject_type_id',
        'title',
        'short_details',
        'details',
        'image',
        'price',
        'status',
        'promo_video_featured_image',
        'promo_video',
        'is_featured',
        'class_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'code' => 'integer',
        'course_type' => 'integer',
        'subject_type_id' => 'integer',
        'title' => 'string',
        'short_details' => 'string',
        'details' => 'string',
        'image' => 'string',
        'price' => 'double',
        'status' => 'string',
        'promo_video_featured_image' => 'string',
        'promo_video' => 'string',
        'is_featured' => 'boolean',
        'class_id'=>'integer'


    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'subject_type_id' => 'required',
        'course_type_id' => 'required',
        'title' => 'required',
        'short_details' => 'required',
        'details' => 'required',
//        'image' => 'required| mimes:jpeg,jpg,png,|max:10000', // max 10000kb
        'price' => "required|regex:/^\d*(\.\d{1,2})?$/", // regex will hold for quantities like '12' or '12.5' or '12.05'.
        'status' => 'required',
//        'promo_video_featured_image' => 'required| mimes:jpeg,jpg,png,|max:10000',
        'promo_video' => 'required',
        'class_id'=>'required',
        
    ];

    public function student_class()
    {
        return $this->belongsTo('App\Models\Admin\StudentClass', 'class_id');
    }

    public function chapters()
    {
        return $this->hasMany('App\Models\Admin\Chapter', 'subject_id');
    }

    public function subject_type()
    {
        return $this->belongsTo('App\Models\Admin\SubjectType', 'subject_type_id');
    }

    public function teachers()
    {
        return $this->belongsToMany('App\Models\Admin\Teacher', 'teacher_courses','teacher_id','course_id')->withPivot('teacher_id', 'course_id');
    }

    public function students()
    {
        return $this->belongsToMany('App\Models\Admin\Student', 'student_courses');
    }

    public function course_to_teach()
    {
        return $this->belongsTo('App\Models\Admin\CourseToTeach', 'course_type');
    }
}
