<?php

namespace App\Models\employee_master;

use Illuminate\Database\Eloquent\Model;

class SalaryDetailModel extends Model
{
    protected $table = 'salary_detail';
    protected $fillable = [
        'basic_salary',
        'allowance1',
        'allowance2',
        'allowance3',
        'allowance4',
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
