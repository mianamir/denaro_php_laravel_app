<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Purchase;
use InfyOm\Generator\Common\BaseRepository;

class PurchaseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'purchase_no',
        'purchase_date',
        'supplier_id',
        'product_id',
        'total_amount',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Purchase::class;
    }
}
