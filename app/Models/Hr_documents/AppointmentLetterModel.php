<?php

namespace App\Models\Hr_documents;

use Illuminate\Database\Eloquent\Model;

class AppointmentLetterModel extends Model
{
    protected $table = 'appointment_letter';
    protected $fillable = [
        'company_id',
        'location_id',
        'project_id',
        'document',
        'employee_status',
        'file'

    ];
}
