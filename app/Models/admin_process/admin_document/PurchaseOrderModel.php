<?php

namespace App\Models\admin_process\admin_document;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrderModel extends Model
{
    protected $table = 'purchase_work_order';
    protected $fillable=[
        'company_id',
        'location_id',
        'department_id',
        'date',
        'vendor_category_id',
        'expense_category_id',
        'vendor_id',
        'total_amount',
        'delivery_date',
        'po_wo_validity_days',
        'approved_by',
        'approve_by_status',
        'approved_date',
        'template_id',
        'generate_po_wo_number',
    ];
}
