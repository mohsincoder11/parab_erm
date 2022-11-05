<?php

namespace App\Models\admin_process\activity_document;

use Illuminate\Database\Eloquent\Model;

class TravelAllowanceModel extends Model
{
    protected $table='travel_allowance';

    protected $fillable=[
        'company_id',
        'location_id' ,
        'department_id' ,
        'employee_id',
        'event_meeting_id',
        'travel_date',
        'travel_details' ,
        'approve_by', 
        'approve_date',         
        'remark',
    ];
}
