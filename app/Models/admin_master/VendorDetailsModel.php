<?php

namespace App\Models\admin_master;

use Illuminate\Database\Eloquent\Model;

class VendorDetailsModel extends Model
{
    protected $table='vendor_details';
    protected $fillable=[
        'vendor_name',
        'company_id',
        'location_id',
        'department_id',
        'expense_category_id',
        'vendor_category_id',
        'address',
        'pan',
        'gst_no',
        'contact_no',
        'contact_person',
        'unit_of_supply',
        'vendor_code',
        'remark'

    ];
}
