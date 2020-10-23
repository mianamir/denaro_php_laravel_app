<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Download;
use InfyOm\Generator\Common\BaseRepository;

class DownloadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'file'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Download::class;
    }
}
