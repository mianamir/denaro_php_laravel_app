<?php

namespace App\Repositories\Admin;

use App\Models\Admin\CarModel;
use InfyOm\Generator\Common\BaseRepository;

class CarModelRepository extends BaseRepository
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
        return CarModel::class;
    }
}
