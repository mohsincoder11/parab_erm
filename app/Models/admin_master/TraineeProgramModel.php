<?php

namespace App\Models\admin_master;

use Illuminate\Database\Eloquent\Model;

class TraineeProgramModel extends Model
{
    protected $table = 'trainee_program';
    protected $fillable = [
        'training_name',
        'company_id',
        'department_id',
        'training_category',
        'vendor_id',
        'training_duration_hrs',
        'training_duration_days',
        'training_topic',
        'training_document'
    ];
}
