<?php

namespace App\Models\asset_master;

use Illuminate\Database\Eloquent\Model;

class AssetModel extends Model
{
    protected $table = 'assets';
    protected $fillable = [
        'asset_name',
        'company_asset_code',
        'asset_category_id',
        'is_working',
        'department_id',
        'employee_id',
        'purchase_date',
        'warranty_date',
        'manufacturer',
        'invoice_no',
        'serial_no',
        'asset_image'
    ];
}
