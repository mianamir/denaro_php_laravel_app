<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Sale;
use InfyOm\Generator\Common\BaseRepository;

class SaleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'sale_no',
        'sale_date',
        'customer_id',
        'product_id',
        'no_of_items',
        'total_amount',
        'remaining_amount',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Sale::class;
    }
}
