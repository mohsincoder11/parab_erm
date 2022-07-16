<?php

namespace App\Models\employee_master;

use Illuminate\Database\Eloquent\Model;

class StatutoryDetailModel extends Model
{
    protected $table = 'statutory_detail';
    protected $fillable = [
        'employee_id',
        'emp_code',
        'uan_no',
        'esic_no',

        'is_pt',

    ];
}
