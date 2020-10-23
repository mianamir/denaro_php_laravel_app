<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Feature;
use InfyOm\Generator\Common\BaseRepository;

class FeatureRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'image'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Feature::class;
    }
}
