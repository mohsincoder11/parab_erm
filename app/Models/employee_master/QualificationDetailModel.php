<?php

namespace App\Models\employee_master;

use Illuminate\Database\Eloquent\Model;

class QualificationDetailModel extends Model
{
    protected $table = 'qualification_detail';
    protected $fillable = [
        'employee_id',
        'emp_code',
        'basic_qualification',
        'graduation',
        'graduation_year',
        'post_graduation',
        'post_graduation_year',
        'professional_qualification',
        'university'
    ];
}
