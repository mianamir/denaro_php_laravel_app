<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Testimonial;
use InfyOm\Generator\Common\BaseRepository;

class TestimonialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'designation',
        'details',
        'image'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Testimonial::class;
    }
}
