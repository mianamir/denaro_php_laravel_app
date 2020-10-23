<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Gallery;
use InfyOm\Generator\Common\BaseRepository;

class GalleryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'image',
        'category',
        'published'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Gallery::class;
    }
}
