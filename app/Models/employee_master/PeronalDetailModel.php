<?php

namespace App\Models\employee_master;

use Illuminate\Database\Eloquent\Model;

class PeronalDetailModel extends Model
{
    protected $table = 'personal_detail';
    protected $fillable = [
        'employee_name',
        'dob',
        'address',
        'city',
        'pincode',
        'contact_no',
        'gender',
        'blood_group',
        'marital_status',
        'spouse_name',
        'marriage_date',
        'personal_email',
        'emergency_contact_no',
        'pan_no',
        'adhar_no',
        'driving_license_no',
       
    ];
}
