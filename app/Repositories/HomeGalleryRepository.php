<?php

namespace App\Repositories;

use App\Models\HomeGallery;
use InfyOm\Generator\Common\BaseRepository;

class HomeGalleryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return HomeGallery::class;
    }
}
