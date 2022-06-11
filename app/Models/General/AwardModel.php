<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;

class AwardModel extends Model
{
    protected $table='awards';
    protected $fillable=[
        'company_id',
        'employee_id',
        'department_id',
        'award_type',
        'gift',
        'cash',
        'description',
        'start_date'

    ];
}
