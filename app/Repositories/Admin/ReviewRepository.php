<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Review;
use InfyOm\Generator\Common\BaseRepository;

class ReviewRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'detail',
        'image'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Review::class;
    }
}
