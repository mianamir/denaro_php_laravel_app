<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class course_to_teach
 * @package App\Models\Admin
 * @version April 2, 2019, 11:08 am UTC
 */
class CourseToTeach extends Model
{
    use SoftDeletes;

    public $table = 'course_to_teaches';
    

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

    public function teachers()
    {
        return $this->belongsToMany('App\Models\Admin\Teacher');
    }

    public function courses()
    {
        return $this->belongsToMany('App\Models\Admin\Subject');
    }
}
