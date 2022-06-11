<?php

namespace App\Models\Hr_documents;

use Illuminate\Database\Eloquent\Model;

class EmployeeComplaintModel extends Model
{
    protected $table = 'employee_complaint';
    protected $fillable = [
        'company_id',
        'complaint_from',
        'complaint_of',
        'complaint_title',
        'complaint_date',
        'description',
    ];
}
