<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Teacher;
use InfyOm\Generator\Common\BaseRepository;

class TeacherRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'fathername',
        'contact1',
        'contact2',
        'email',
        'qualificatioon',
        'subject_to_teach',
        'experience',
        'username',
        'password',
        'teacher_code',
        'country',
        'city',
        'profile_pic',
        'cnic',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Teacher::class;
    }
}
