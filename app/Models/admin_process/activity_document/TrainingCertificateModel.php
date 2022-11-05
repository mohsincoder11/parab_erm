<?php

namespace App\Models\admin_process\activity_document;

use Illuminate\Database\Eloquent\Model;

class TrainingCertificateModel extends Model
{
    protected $table='training_certificate';
    protected $fillable=[
        'company_id',
        'location_id' ,
        'training_date',
        'training_calendar_id',
        'meeting_participant_employee',
        'certificate_template' ,
        'remark',
    ];
}
