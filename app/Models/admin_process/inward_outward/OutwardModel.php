<?php

namespace App\Models\admin_process\inward_outward;

use Illuminate\Database\Eloquent\Model;

class OutwardModel extends Model
{
    protected $table = 'outwards';
    protected $fillable = [
        'company_id',
        'location_id',
        'department_id',
        'outward_type',
        'outward_date',
        'inward_number',
        'to_name',
        'courier_name',
        'awb_number',
        'employee_id',
        'outward_number',
    ];
}
