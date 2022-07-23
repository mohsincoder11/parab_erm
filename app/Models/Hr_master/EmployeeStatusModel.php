<?php

namespace App\Models\Hr_master;

use Illuminate\Database\Eloquent\Model;

class EmployeeStatusModel extends Model
{
    protected $table = 'employee_status';
    protected $fillable=[
        'employee_status_name',
        'company_id',
        'project_id',
        'location_id',
        'status_type',
        'working_hour'
    ];
}
