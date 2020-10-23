<?php

namespace App\Repositories\Admin;

use App\Models\Admin\CarFuelType;
use InfyOm\Generator\Common\BaseRepository;

class CarFuelTypeRepository extends BaseRepository
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
        return CarFuelType::class;
    }
}
