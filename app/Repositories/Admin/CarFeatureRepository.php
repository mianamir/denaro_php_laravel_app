<?php

namespace App\Repositories\Admin;

use App\Models\Admin\CarFeature;
use InfyOm\Generator\Common\BaseRepository;

class CarFeatureRepository extends BaseRepository
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
        return CarFeature::class;
    }
}
