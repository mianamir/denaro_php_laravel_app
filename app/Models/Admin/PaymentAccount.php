<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PaymentAccount
 * @package App\Models\Admin
 * @version February 20, 2019, 2:43 pm UTC
 */
class PaymentAccount extends Model
{
    use SoftDeletes;

    public $table = 'payment_accounts';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'type',
        'status',
        'account'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'type' => 'string',
        'status' => 'string',
        'account' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'type' => 'required',
        'status' => 'required',
        'account' => 'required'
    ];

    
}
