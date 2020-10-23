<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Topic;
use InfyOm\Generator\Common\BaseRepository;

class TopicRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'chapter_id',
        'title',
        'details'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Topic::class;
    }
}
