<?php

namespace App\Repositories\Admin;

use App\Models\Admin\SubCategory;
use InfyOm\Generator\Common\BaseRepository;

class SubCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'category_id',
        'url',
        'slug',
        'title',
        'meta_keywords',
        'meta_description',
        'image'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return SubCategory::class;
    }
}
