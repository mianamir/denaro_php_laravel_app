<?php

namespace App\Repositories\Admin;

use App\Models\Admin\BrandType;
use InfyOm\Generator\Common\BaseRepository;

class BrandTypeRepository extends BaseRepository
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
        return BrandType::class;
    }
}
