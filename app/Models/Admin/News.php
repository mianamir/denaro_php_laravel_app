<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class News
 * @package App\Models\Admin
 * @version November 8, 2016, 9:39 pm UTC
 */
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class News extends Model
{
    use SoftDeletes;
    //use SluggableScopeHelpers;

   // use Sluggable;
    public $table = 'news';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
//        'heading',
        'detail',
        'title'
//        'slug',
//        'meta_description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
//        'heading' => 'string',
        'detail' => 'string',
        'title' => 'string',
//        'slug' => 'string',
//        'meta_description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
//        'heading' => 'required'
    ];


//    public function sluggable()
//    {
//        return [
//            'slug' => [
//                'source' => 'title'
//            ]
//        ];
//    }
}
