<?php

namespace App\Models\admin_process\training;

use Illuminate\Database\Eloquent\Model;

class TrainingCalendarModel extends Model
{
    protected $table = 'training_calendar';
    protected $fillable = [
        'company_id',
        'location_id',
        'department_id',
        'training_start_date',
        'training_start_time',
        'training_end_date',
        'training_end_time',
        'trainer_id',
        'training_proposer_employee',
        'training_participant_employee',
        'vendor_id',       
        'estimate_training_cost',
        'file_type',
        'file',
        'training_code',

    ];
}
