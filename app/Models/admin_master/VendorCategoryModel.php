<?php

namespace App\Models\admin_master;

use Illuminate\Database\Eloquent\Model;

class VendorCategoryModel extends Model
{
    protected $table='vendor_category';
    protected $fillable=[
        'vendor_category_name',
        'company_id',
        'location_id',
        'department_id',
        'expense_category_id',
        'unit_of_supply'

    ];
}
