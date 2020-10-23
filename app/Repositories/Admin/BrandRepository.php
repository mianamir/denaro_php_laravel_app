<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Brand;
use InfyOm\Generator\Common\BaseRepository;

class BrandRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'image',
        'brand_type_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Brand::class;
    }
}
