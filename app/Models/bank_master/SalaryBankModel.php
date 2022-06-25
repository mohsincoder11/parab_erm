<?php

namespace App\Models\bank_master;

use Illuminate\Database\Eloquent\Model;

class SalaryBankModel extends Model
{
    protected $table='salary_bank';
    protected $fillable = [
        'bank_id',
        'bank_acc_no',
        'salary_format',
        'bank_ifsc_code',
        'company_id'
    ];
}
