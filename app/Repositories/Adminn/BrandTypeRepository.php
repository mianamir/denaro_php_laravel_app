<?php

namespace App\Repositories\Adminn;

use App\Models\Adminn\BrandType;
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
