<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PaymentPlan
 * @package App\Models\Admin
 * @version February 20, 2019, 12:50 pm UTC
 */
class PaymentPlan extends Model
{
    use SoftDeletes;

    public $table = 'payment_plans';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'price',
        'duration',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'price' => 'string',
        'duration' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'price' => 'required',
        'duration' => 'required',
        'status' => 'required'
    ];

    public function teachers()
    {
        return $this->belongsToMany('App\Models\Admin\Teacher');
    }
    
}
