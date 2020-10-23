<?php

namespace App\Repositories\Admin;

use App\Models\Admin\PayRoll;
use InfyOm\Generator\Common\BaseRepository;

class PayRollRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'employee_id',
        'salary',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PayRoll::class;
    }
}
