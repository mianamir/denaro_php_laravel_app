<?php

namespace App\Repositories;

use App\Models\Class;
use InfyOm\Generator\Common\BaseRepository;

class ClassRepository extends BaseRepository
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
        return Class::class;
    }
}
