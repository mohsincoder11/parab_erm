<?php

namespace App\Models\Hr_documents;

use Illuminate\Database\Eloquent\Model;

class ConfirmationLetterModel extends Model
{
    protected $table = 'confirmation_letter';
    protected $fillable = [
        'company_id',
        'location_id',
        'project_id',
        'document',
        'employee_status',
        'file'

    ];
}
