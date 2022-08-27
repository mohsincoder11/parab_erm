<?php

namespace App\Models\employee_master;

use Illuminate\Database\Eloquent\Model;

class SalaryDetailModel extends Model
{
    protected $table = 'salary_detail';
    protected $fillable = [
      'employee_id',
        'emp_code',
        'company_id',  
        'basic_salary',       
        'areas',
        'incentive',
        'gross_salary',
        'pf',
        'esic',
        'pt',
        'it',
        'advance',
        'total_deduction',
        'net_salary',
        'ctc',
        'bank_name',
        'branch_name',
        'ifsc_code',
        'account_no',
    ];
}
