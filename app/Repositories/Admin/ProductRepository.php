<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Product;
use InfyOm\Generator\Common\BaseRepository;

class ProductRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ref_no',
        'make',
        'model',
        'version',
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
        'availablity',
        'image',
        'features',
        'pro_img_id',
        'is_fresh_arrival',
        'is_featured_stock'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Product::class;
    }
}
