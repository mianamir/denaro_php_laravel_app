<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Topic
 * @package App\Models\Admin
 * @version January 22, 2019, 10:23 am UTC
 */
class Topic extends Model
{
    use SoftDeletes;

    public $table = 'topics';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'class_id',
        'subject_id',
        'chapter_id',
        'title',
        'details',
        'topic_video',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'class_id' => 'integer',
        'subject_id' => 'integer',
        'chapter_id' => 'integer',
        'title' => 'string',
        'details' => 'string',
        'topic_video' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
//        'class_id' => 'required',
//        'subject_id' => 'required',
//        'chapter_id' => 'required',
        'title' => 'required',
        'details' => 'required',
        'topic_video' => 'required'
//        'status' => 'required'
    ];


    public function topic_class()
    {
        return $this->belongsTo('App\Models\Admin\StudentClass', 'class_id');
    }
    public function subject()
    {
        return $this->belongsTo('App\Models\Admin\Subject', 'subject_id');
    }
    public function chapter()
    {
        return $this->belongsTo('App\Models\Admin\Chapter', 'chapter_id');
    }



    
}
