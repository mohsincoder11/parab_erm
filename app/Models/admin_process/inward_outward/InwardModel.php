<?php

namespace App\Models\admin_process\inward_outward;

use Illuminate\Database\Eloquent\Model;

class InwardModel extends Model
{
    protected $table = 'inwards';
    protected $fillable=[
        'location_id',
        'department_id',
        'inward_type',
        'from_name',
        'received_date',
        'to_name',
        'employee_id',
        'inward_number',
        'company_id',
    ];
}
