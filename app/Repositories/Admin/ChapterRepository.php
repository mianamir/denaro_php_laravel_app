<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Chapter;
use InfyOm\Generator\Common\BaseRepository;

class ChapterRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'details'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Chapter::class;
    }
}
