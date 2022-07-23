<?php

namespace App\Models\employee_master;

use Illuminate\Database\Eloquent\Model;

class AssetPerkDetailModel extends Model
{
    protected $table = 'assetperk_detail';
    protected $fillable = [
        'employee_id',
        'company_id',
        'emp_code',
        'perk_name',
        'sr_no',
        'issue_date',
        'return_date',
        'value',        
        'validity',
    ];
}
