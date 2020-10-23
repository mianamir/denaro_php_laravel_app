<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TopicVideo
 * @package App\Models\Admin
 * @version Jan 31, 2019, 6:55 pm UTC
 */
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class TopicVideo extends Model
{
    use SoftDeletes;
    use SluggableScopeHelpers;


    public $table = 'topic_videos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'topic_id',
        'video_url',
        'featured_image',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'topic_id' => 'integer',
        'video_url' => 'string',
        'featured_image' => 'string',
        'status' => 'string'

    ];

    /**
     * Validation rules
     *
     * @var array
     */
//    public static $rules = [
//
//    ];


    public function topic()
    {
        return $this->belongsTo('App\Models\Admin\Topic', 'topic_id');
    }

    
}
