<?php

namespace App\Repositories\Admin;

use App\Models\Admin\CEO;
use InfyOm\Generator\Common\BaseRepository;

class CEORepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'image',
        'details'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CEO::class;
    }
}
