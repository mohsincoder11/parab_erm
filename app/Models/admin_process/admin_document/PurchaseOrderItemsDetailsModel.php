<?php

namespace App\Models\admin_process\admin_document;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrderItemsDetailsModel extends Model
{
    protected $table = 'purchase_work_order_items_detail';
    protected $fillable=[
        'purchase_work_order_id',
        'quantity',
        'rate',
        'details',
    ];
}
