<?php

namespace App\Models\admin_process\training;

use Illuminate\Database\Eloquent\Model;

class TrainingFeedbackModel extends Model
{
    protected $table = 'training_feedback';
    protected $fillable = [
        'company_id',
        'location_id',
        'department_id',
        'training_date',
        'training_calendar_id',
        'training_proposer_employee',
        'training_participant_employee',
        'training_cost',
        'approve_by',
        'approve_date',
        'file',

    ];
}
