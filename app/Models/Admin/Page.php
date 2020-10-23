<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Page
 * @package App\Models\Admin
 * @version November 8, 2016, 7:26 pm UTC
 */
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Page extends Model
{
    use SoftDeletes;
    use SluggableScopeHelpers;

    use Sluggable;

    public $table = 'pages';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'details',
        'title',
        'image',
        'meta_keywords',
        'meta_description',
        'slug',
        'heading',
        'parent_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'details' => 'string',
        'title' => 'string',
        'image' => 'string',
        'meta_description' => 'string',
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'slug'
            ]
        ];
    }

}
