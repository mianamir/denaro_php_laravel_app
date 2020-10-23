<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Student;
use InfyOm\Generator\Common\BaseRepository;

class StudentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'class_id',
        'father_name',
        'phone',
        'gender',
        'country',
        'type'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Student::class;
    }
}
