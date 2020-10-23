<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Certification;
use InfyOm\Generator\Common\BaseRepository;

class CertificationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'image'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Certification::class;
    }
}
