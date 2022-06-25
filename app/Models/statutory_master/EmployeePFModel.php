<?php

namespace App\Models\statutory_master;

use Illuminate\Database\Eloquent\Model;

class EmployeePFModel extends Model
{
    protected $table='employee_pf';
    protected $fillable=[
        'pf_file',
        'chartA',
        'chalan'
    ];
}
