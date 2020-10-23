<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Foo;
use InfyOm\Generator\Common\BaseRepository;

class FooRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'f_name',
        'image',
        'country'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Foo::class;
    }
}
