<?php

namespace App\Models\employee_master;

use Illuminate\Database\Eloquent\Model;

class OfficialDetailModel extends Model
{
    protected $table = 'employee_official_details';
    protected $fillable = [
        'employee_id',
        'company_id',
        'emp_code',
        'emp_status_id',
        'date_joining',
        'date_conform',
        'date_leaving',
        'department_id',
        'designation_id',
        'grade_id',
        'project_id',
        'location_id',
        'reporting_manager',
        'official_mob_no',
        'official_mail_id',
        'working_hr',
    ];
}
