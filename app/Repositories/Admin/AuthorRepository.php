<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Author;
use InfyOm\Generator\Common\BaseRepository;

class AuthorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'details',
        'show_in_navigation'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Author::class;
    }
}
