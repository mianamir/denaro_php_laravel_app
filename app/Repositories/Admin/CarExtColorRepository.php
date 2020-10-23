<?php

namespace App\Repositories\Admin;

use App\Models\Admin\CarExtColor;
use InfyOm\Generator\Common\BaseRepository;

class CarExtColorRepository extends BaseRepository
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
        return CarExtColor::class;
    }
}
