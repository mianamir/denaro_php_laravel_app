<?php

namespace App\Repositories\Admin;

use App\Models\Admin\SocialIcon;
use InfyOm\Generator\Common\BaseRepository;

class SocialIconRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'url'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return SocialIcon::class;
    }
}
