<?php

namespace App\Repositories\Admin;

use App\Models\Admin\AirCompressors;
use InfyOm\Generator\Common\BaseRepository;

class AirCompressorsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'size',
        'name',
        'model',
        'image',
        'short_description',
        'long_description',
        'technical_specification',
        'dryer',
        'tank',
        'price',
        'title',
        'meta_description',
        'availability',
        'published'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AirCompressors::class;
    }
}
