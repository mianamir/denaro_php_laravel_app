<?php

namespace App\Repositories\Admin;

use App\Models\Admin\CarTransmission;
use InfyOm\Generator\Common\BaseRepository;

class CarTransmissionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CarTransmission::class;
    }
}
