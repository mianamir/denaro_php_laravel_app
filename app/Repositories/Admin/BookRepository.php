<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Book;
use InfyOm\Generator\Common\BaseRepository;

class BookRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'book_code',
        'total_pages',
        'price',
        'author',
        'publishers',
        'title',
        'meta_description',
        'meta_keywords',
        'image',
        'demo_file',
        'pdf_file',
        'published'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Book::class;
    }
}
