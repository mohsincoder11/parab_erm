<?php

namespace App\Models\employee_master;

use Illuminate\Database\Eloquent\Model;

class PersonalDetailModel extends Model
{
    protected $table = 'personal_detail';
    protected $fillable = [
        'company_id',
        'salutation',
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
        'pahar_no',
        'drn_no',
        'adiving_license_no',
       
    ];
}
