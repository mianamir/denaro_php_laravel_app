<?php

namespace App\Repositories\Admin;

use App\Models\Admin\CarIntColor;
use InfyOm\Generator\Common\BaseRepository;

class CarIntColorRepository extends BaseRepository
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
        return CarIntColor::class;
    }
}
