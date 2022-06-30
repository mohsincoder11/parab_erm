<?php

namespace App\Models\employee_master;

use Illuminate\Database\Eloquent\Model;

class AssetPerkDetailModel extends Model
{
    protected $table = 'assetperk_detail';
    protected $fillable = [
        'perk_name',
        'sr_no',
        'issue_date',
        'return_date',
        'value',        
        'validity',
    ];
}
