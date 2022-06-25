<?php

namespace App\Models\asset_master;

use Illuminate\Database\Eloquent\Model;

class CompanyAssetModel extends Model
{
    protected $table = 'company_asset';
    protected $fillable=[
        'asset_name',
        'company_id',
        'asset_category_id',
        'asset_serial_no'
    ];

}
