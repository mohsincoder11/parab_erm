<?php

namespace App\Models\admin_process\admin_document;

use Illuminate\Database\Eloquent\Model;

class PurchaseInvoiceModel extends Model
{
    protected $table = 'purchase_invoice';
    protected $fillable=[
        'company_id',
        'location_id',
        'department_id',
        'date',
        'vendor_category_id',
        'vendor_id',
        'invoice_date',
        'invoice_number',
        'order_details',
        'total_amount',
        'delivery_date',
        'approved_by',
        'approved_date',
        'file',
    ];
}
