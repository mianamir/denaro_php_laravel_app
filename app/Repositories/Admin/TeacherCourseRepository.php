<?php

namespace App\Repositories\Admin;

use App\Models\Admin\TeacherCourse;
use InfyOm\Generator\Common\BaseRepository;

class TeacherCourseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'teacher_id',
        'course_id',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TeacherCourse::class;
    }
}
