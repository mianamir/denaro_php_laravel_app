<?php

namespace App\Repositories\Admin;

use App\Models\Admin\SubjectType;
use InfyOm\Generator\Common\BaseRepository;

class SubjectTypeRepository extends BaseRepository
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
        return SubjectType::class;
    }
}
