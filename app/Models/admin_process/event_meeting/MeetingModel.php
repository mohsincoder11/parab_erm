<?php

namespace App\Models\admin_process\event_meeting;

use Illuminate\Database\Eloquent\Model;

class MeetingModel extends Model
{
    protected $table = 'meetings';
    protected $fillable = [
        'company_id',
        'location_id',
        'department_id',
        'meeting_date',
        'meeting_type',
        'meeting_proposer_employee',
        'meeting_participant_employee',
        'vendor_id',
        'estimate_amount',
        'approve_by',
        'approve_date',
        'approve_amount',
        'file_type',
        'file',
        'meeting_id',

    ];
}
