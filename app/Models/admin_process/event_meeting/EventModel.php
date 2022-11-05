<?php

namespace App\Models\admin_process\event_meeting;

use Illuminate\Database\Eloquent\Model;

class EventModel extends Model
{
    protected $table = 'events';
    protected $fillable = [
        'company_id',
        'location_id',
        'department_id',
        'event_date',
        'event_type',
        'event_proposer_employee',
        'event_coordinator_employee',
        'vendor_id',
        'estimate_amount',
        'approve_by',
        'approve_date',
        'approve_amount',
        'file_type',
        'file',
        'event_id',

    ];

    // protected $casts=[
    //     'event_coordinator_employee'=>'array',
    //     'vendor_id'=>'array',
    // ];
}
