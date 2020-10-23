<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Employee;
use InfyOm\Generator\Common\BaseRepository;

class EmployeeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'eamil',
        'cnic',
        'phone',
        'image',
        'salary',
        'address',
        'city',
        'country',
        'status',
        'type'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Employee::class;
    }
}
