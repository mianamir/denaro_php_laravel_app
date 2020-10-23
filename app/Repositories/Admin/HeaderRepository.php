<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Header;
use InfyOm\Generator\Common\BaseRepository;

class HeaderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'logo',
        'image1',
        'image2',
        'phone',
        'email'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Header::class;
    }
}
