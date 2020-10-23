<?php

namespace App\Repositories\Admin;

use App\Models\Admin\NameCategory;
use InfyOm\Generator\Common\BaseRepository;

class NameCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name_ar',
        'name_ar',
        'url'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return NameCategory::class;
    }
}
