<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Car;
use InfyOm\Generator\Common\BaseRepository;

class CarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ref_no',
        'type',
        'status',
        'estimated_time_arrival',
        'price',
        'make',
        'model',
        'version',
        'year',
        'color_ext',
        'color_int',
        'car_type',
        'engine_cc',
        'transmission',
        'chassis_type',
        'doors',
        'seats',
        'mileages',
        'registration_import',
        'availability',
        'image',
        'features',
        'detail',
        'cat_id',
        'is_fresh_arrival',
        'is_featured_stock'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Car::class;
    }
}
