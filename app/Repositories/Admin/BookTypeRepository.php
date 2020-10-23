<?php

namespace App\Repositories\Admin;

use App\Models\Admin\BookType;
use InfyOm\Generator\Common\BaseRepository;

class BookTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return BookType::class;
    }
}
