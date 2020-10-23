<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SubCategory
 * @package App\Models\Admin
 * @version December 26, 2016, 7:16 pm UTC
 */
class SubCategory extends Model
{
    use SoftDeletes;

    public $table = 'sub_categories';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'category_id',
        'url',
        'slug',
        'title',
        'meta_keywords',
        'meta_description',
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
        'slug' => 'string',
        'title' => 'string',
        'meta_keywords' => 'string',
        'meta_description' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'category_id' => 'required',
        'url' => 'required'
    ];

    public function books()
    {
        return $this->hasMany(Book::class, 'sub_category_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
