<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Contact;
use InfyOm\Generator\Common\BaseRepository;

class ContactRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'address',
        'email',
        'phone1',
        'phone2',
        'phone3',
        'phone4',
        'fax',
        'website'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Contact::class;
    }
}
