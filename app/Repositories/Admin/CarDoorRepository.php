<?php

namespace App\Repositories\Admin;

use App\Models\Admin\CarDoor;
use InfyOm\Generator\Common\BaseRepository;

class CarDoorRepository extends BaseRepository
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
        return CarDoor::class;
    }
}
