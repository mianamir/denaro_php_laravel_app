<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Expense;
use InfyOm\Generator\Common\BaseRepository;

class ExpenseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_id',
        'name',
        'details',
        'type',
        'amount',
        'supplier_id',
        'employee',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Expense::class;
    }
}
