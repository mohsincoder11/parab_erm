<?php

namespace App\Models\bank_master;

use Illuminate\Database\Eloquent\Model;

class EmployerBankModel extends Model
{
    protected $table='employer_bank';
    protected $fillable = [
        'bank_id',
        'bank_acc_no',
        'bank_ifsc_code',
        'company_id'
    ];
}
