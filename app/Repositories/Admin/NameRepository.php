<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Name;
use InfyOm\Generator\Common\BaseRepository;

class NameRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'english',
        'type',
        'lang',
        'meaning',
        'name_category_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Name::class;
    }
}
