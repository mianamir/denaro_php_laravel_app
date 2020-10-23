<?php

namespace App\Repositories\Admin;

use App\Models\Admin\CarSeat;
use InfyOm\Generator\Common\BaseRepository;

class CarSeatRepository extends BaseRepository
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
        return CarSeat::class;
    }
}
