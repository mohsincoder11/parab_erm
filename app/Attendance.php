<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'employee_id',
        'attendance_date',
        'clock_in',
        'clock_out',
        'time_late',
        'early_leaving',
        'overtime',
        'total_work',
        'total_rest',
        'attendance_status',
        'leave_id'
    ];
}
