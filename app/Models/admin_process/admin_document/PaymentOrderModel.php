<?php

namespace App\Models\admin_process\admin_document;

use Illuminate\Database\Eloquent\Model;

class PaymentOrderModel extends Model
{
    protected $table = 'payment_order';
    protected $fillable=[
'company_id',
'location_id',
'department_id',
'date',
'vendor_category_id',
'vendor_id',
'purchase_invoice_id',
'payment_date',
'payment_mode',
'payment_ref_no',
'authority_name',
'approved_date',
'template_id',
'payment_order_no',
    ];
}
