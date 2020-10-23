<?php

namespace App\Repositories\Admin;

use App\Models\Admin\PaymentAccount;
use InfyOm\Generator\Common\BaseRepository;

class PaymentAccountRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'type',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PaymentAccount::class;
    }
}
