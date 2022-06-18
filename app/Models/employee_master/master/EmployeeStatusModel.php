<?php

namespace App\Models\employee_master\master;

use Illuminate\Database\Eloquent\Model;

class EmployeeStatusModel extends Model
{
    protected $table='employee_status_master';
    protected $fillable=[
        'employee_status_name',
    ];
}
