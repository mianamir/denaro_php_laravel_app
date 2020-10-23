<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Stockist;
use InfyOm\Generator\Common\BaseRepository;

class StockistRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'city_name',
        'area',
        'area',
        'address'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Stockist::class;
    }
}
