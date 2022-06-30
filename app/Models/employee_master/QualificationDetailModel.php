<?php

namespace App\Models\employee_master;

use Illuminate\Database\Eloquent\Model;

class QualificationDetailModel extends Model
{
    protected $table='qualification_detail';
    protected $fillable = [
        'graduation',
        'graduation_year',
        'post_graduation',
        'post_graduation_year',
        'professional_qualification',
        'university'
    ];
}
