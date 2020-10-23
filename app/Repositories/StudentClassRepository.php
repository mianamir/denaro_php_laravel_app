<?php

namespace App\Repositories;

use App\Models\Admin\StudentClass;
use InfyOm\Generator\Common\BaseRepository;

class StudentClassRepository extends BaseRepository
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
        return StudentClass::class;
    }
}
