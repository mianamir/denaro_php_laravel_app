<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Suppier;
use InfyOm\Generator\Common\BaseRepository;

class SuppierRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'phone',
        'total_amount',
        'remaining_amount',
        'image',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Suppier::class;
    }
}
