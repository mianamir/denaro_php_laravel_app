<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Employee
 * @package App\Models\Admin
 * @version March 4, 2018, 7:10 am UTC
 */
class Employee extends Model
{
    use SoftDeletes;

    public $table = 'employees';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'reg_no',
        'full_name',
        'gender',
        'dob',
        'place_of_birth',
        'religion',
        'sect',
        'nationality',
        'latest_school_attended',
        'names_of_real_brothers_sisters_pps',
        'fathers_name',
        'email',
        'cnic',
        'qualifications',
        'occupation',
        'office_address',
        'present_home_address',
        'permanent_home_address',
        'office_phone_no',
        'present_home_phone_no',
        'name',
        'name_parents_guardian',
        'status',


    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'reg_no' => 'required',
        'full_name' => 'required',
        'gender' => 'required',
        'dob' => 'required',
        'place_of_birth' => 'required',
        'religion' => 'required',
        'sect' => 'required',
        'nationality' => 'required',
        'latest_school_attended' => 'required',
        'names_of_real_brothers_sisters_pps' => 'required',
        'fathers_name' => 'required',
        'email' => 'required',
        'cnic' => 'required',
        'qualifications' => 'required',
        'occupation' => 'required',
        'office_address' => 'required',
        'permanent_home_address' => 'required',
        'office_phone_no' => 'required',
        'present_home_phone_no' => 'required',
        'name' => 'required',
        'name_parents_guardian' => 'required',
//        'status' => 'required',

    ];

    
}
