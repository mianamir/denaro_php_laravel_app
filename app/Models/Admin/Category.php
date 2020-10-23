<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Category
 * @package App\Models\Admin
 * @version February 25, 2017, 7:45 pm UTC
 */
class Category extends Model
{
    use SoftDeletes;

    public $table = 'categories';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'url',
        'title',
        'meta_keywords',
        'meta_description',
        'parent_id',
        'details',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'url' => 'string',
        'title' => 'string',
        'meta_keywords' => 'string',
        'meta_description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
//        'url' => 'required'
    ];

    public function books()
    {
        return $this->hasMany(Book::class, 'category_id', 'id');
    }
    public function products()
    {
        return $this->hasMany(Product::class, 'cat_id', 'id');
    }


    public function childs() {
        return $this->hasMany(Category::class,'parent_id','id') ;
    }
}
