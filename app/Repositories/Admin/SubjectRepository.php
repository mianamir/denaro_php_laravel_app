<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Subject;
use InfyOm\Generator\Common\BaseRepository;

class SubjectRepository extends BaseRepository
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
        return Subject::class;
    }
}
