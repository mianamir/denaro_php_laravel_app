<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Map;
use InfyOm\Generator\Common\BaseRepository;

class MapRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'image',
        'order',
        'published'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Map::class;
    }
}
