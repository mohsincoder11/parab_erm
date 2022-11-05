<?php

namespace App\Models\admin_process\activity_document;

use Illuminate\Database\Eloquent\Model;

class EventMeetingModel extends Model
{
    protected $table = 'event_meeting';
    protected $fillable = [
        'company_id',
        'location_id',
        'department_id',
        'event_meeting_date',
        'meeting_proposer_employee',
        'meeting_participant_employee',
        'file',
        'remark',
    ];
}
