<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ClassSubject
 * @package App\Models\Admin
 * @version January 22, 2019, 12:18 pm UTC
 */
class ClassSubject extends Model
{
    use SoftDeletes;

    public $table = 'class_subjects';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'student_class_id',
        'subject_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'student_class_id' => 'integer',
        'subject_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'student_class_id' => 'required',
        'subject_id' => 'required'
    ];

    
}
