<?php

namespace App\Models\employee_master;

use Illuminate\Database\Eloquent\Model;

class SalaryDetailFields extends Model
{
    protected $table='salary_detail_field';
    protected $fillable=[
        'salary_detail_id',
        'field',
        'value'
    ];
}
