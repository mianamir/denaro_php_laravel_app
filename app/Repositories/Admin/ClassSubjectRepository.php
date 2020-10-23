<?php

namespace App\Repositories\Admin;

use App\Models\Admin\ClassSubject;
use InfyOm\Generator\Common\BaseRepository;

class ClassSubjectRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ClassSubject::class;
    }
}
