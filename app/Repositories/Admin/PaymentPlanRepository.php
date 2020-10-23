<?php

namespace App\Repositories\Admin;

use App\Models\Admin\PaymentPlan;
use InfyOm\Generator\Common\BaseRepository;

class PaymentPlanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'price',
        'duration',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PaymentPlan::class;
    }
}
