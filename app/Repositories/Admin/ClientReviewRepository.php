<?php

namespace App\Repositories\Admin;

use App\Models\Admin\ClientReview;
use InfyOm\Generator\Common\BaseRepository;

class ClientReviewRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'image',
        'name',
        'detail'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ClientReview::class;
    }
}
