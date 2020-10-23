<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Promotion;
use InfyOm\Generator\Common\BaseRepository;

class PromotionRepository extends BaseRepository
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
        return Promotion::class;
    }
}
