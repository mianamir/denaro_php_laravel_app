<?php

namespace App\Repositories\Admin;

use App\Models\Admin\AirAccessories;
use InfyOm\Generator\Common\BaseRepository;

class AirAccessoriesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'model',
        'image',
        'short_description',
        'detail_description',
        'technical_specification',
        'title',
        'meta_description',
        'drayers',
        'filters',
        'published',
        'price'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AirAccessories::class;
    }
}
