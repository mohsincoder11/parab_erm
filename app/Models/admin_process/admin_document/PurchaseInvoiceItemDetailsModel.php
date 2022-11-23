<?php

namespace App\Models\admin_process\admin_document;

use Illuminate\Database\Eloquent\Model;

class PurchaseInvoiceItemDetailsModel extends Model
{
    protected $table = 'purchase_invoice_items_detail';
    protected $fillable=[
        'purchase_invoice_id',
        'item_id',
        'quantity',
        'rate',
    
    ];
}
