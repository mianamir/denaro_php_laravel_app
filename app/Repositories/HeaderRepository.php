<?php

namespace App\Repositories;

use App\Models\Header;
use InfyOm\Generator\Common\BaseRepository;

class HeaderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'logo',
        'title',
        'sub_title',
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
