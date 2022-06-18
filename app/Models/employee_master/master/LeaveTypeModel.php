<?php

namespace App\Models\employee_master\master;

use Illuminate\Database\Eloquent\Model;

class LeaveTypeModel extends Model
{
    protected $table='leave_type_master';
    protected $fillable=[
        'leave_name',
        'day_per_year'
    ];
}
