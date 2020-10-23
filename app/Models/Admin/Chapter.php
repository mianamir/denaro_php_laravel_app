<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Chapter
 * @package App\Models\Admin
 * @version January 21, 2019, 5:59 pm UTC
 */
class Chapter extends Model
{
    use SoftDeletes;

    public $table = 'chapters';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'subject_id',
        'title',
        'details'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'subject_id' => 'integer',
        'title' => 'string',
        'details' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
//        'subject_id' => 'required',
        'title' => 'required',
        'details' => 'required'
    ];


    public function subject()
    {
        return $this->belongsTo('App\Models\Admin\Subject', 'subject_id');
    }

    public function topics()
    {
        return $this->hasMany('App\Models\Admin\Topic', 'chapter_id');
    }
    
}
