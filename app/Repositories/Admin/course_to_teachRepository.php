<?php

namespace App\Repositories\Admin;

use App\Models\Admin\CourseToTeach;
use InfyOm\Generator\Common\BaseRepository;

class course_to_teachRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CourseToTeach::class;
    }
}
