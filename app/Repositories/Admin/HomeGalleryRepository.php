<?php

namespace App\Repositories\Admin;

use App\Models\Admin\HomeGallery;
use InfyOm\Generator\Common\BaseRepository;

class HomeGalleryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'image'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return HomeGallery::class;
    }
}
